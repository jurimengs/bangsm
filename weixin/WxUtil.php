<?php

require_once("globleconfig.php");
require_once('LogUtil.php');
require_once("XmlUtil.php");
require_once("DateUtil.php");
require_once("JsonUtil.php");
require_once("RequestUtil.php");

class WxUtil {
	
	/**
	 * get token from db
	 */
	public static function getWxTokenFromDB(){
		// 因为在wxindex.php里面已经引用过inc.db.php,所以这里是能拿到db的
		global $db;
		$tokenObj = $db->fetch($db->query("SELECT * FROM wx_token where id = 1"));
		
		if($tokenObj) {
			// 如果不为空
			$tokenFromDB = $tokenObj['token'];
			
			$updatetime = $tokenObj['updatetime'];
			$currenttime = DateUtil::getCurrentTime();
			/*$days=floor((strtotime($currenttime)-strtotime($updatetime))/86400);
			$hour=floor((strtotime($currenttime)-strtotime($updatetime))%86400/3600);
			$minute=floor((strtotime($currenttime)-strtotime($updatetime))%86400/60);
			$second=floor((strtotime($currenttime)-strtotime($updatetime))%86400%60);
			
			$seconds = $days * 24 + $hour * 60 + $minute * 60 + $second;*/
			$seconds = DateUtil::getTimeInterval($currenttime, $updatetime);
			LogUtil::logs("getWxTokenFromDB=====> ".$seconds, getLogFile("/business.log"));
			if($seconds >= 6000) {
				// 如果当前操作时间的间隔已经大于或等于6500秒了
				//LogUtil::logs("WxUtil getWxTokenFromDB  ：已超时，重新获取token", getLogFile('/business.log'));
				return self :: initWxTokenToDB();
			}
			//LogUtil::logs("WxUtil getWxTokenFromDB  ：未超时，使用数据库token", getLogFile('/business.log'));
			return $tokenFromDB;
		}
		//LogUtil::logs("WxUtil self getWxTokenFromDB  ：数据库不存在token，初始化token", getLogFile('/business.log'));
		return self :: initWxTokenToDB();
	}
	
	/**
	 * save token to db
	 */
	public static function initWxTokenToDB(){
		global $db;
		$url = wxTokenUrl()."&appid=".appid()."&secret=".secret();
		// 请求微信token
		//LogUtil::logs("initWxTokenToDB tokenurl====>".$url, getLogFile('/business.log'));
		$arr =  RequestUtil::httpGet($url);
		$newToken = $arr['access_token'];
		//LogUtil::logs("initWxTokenToDB newToken====>".$newToken, getLogFile('/business.log'));
		
		// 请求微信ticket
		$newTicket = self :: initTicket($newToken);
		
		$updatetime = DateUtil::getCurrentTime();
		
		
		// 加锁文件
		if(file_exists($lockfile)) {
			//LogUtil::logs("initWxTokenToDB ====> file in writing, only can read\r\n", getLogFile('/business.log'));
			exit();
		}
		
		// save or update;
		$db->exec("INSERT INTO wx_token(id, token, updatetime, ticket) 
		values(1, '$newToken','$updatetime','$newTicket') 
		ON DUPLICATE KEY UPDATE token='$newToken', updatetime='$updatetime', ticket='$newTicket'" );
		
		// 关闭锁文件
		fclose($lockTemp);
		// 删除锁文件
		unlink($lockfile);
		
		return $newToken;
	}
	
	public static function initTicket($newToken){
		$type = typeForTicket();
		$ticketUrl = wxTicketUrl()."?access_token=".$newToken."&type=".$type;
		//LogUtil::logs("wxindex.php initTicket url======>".$ticketUrl, getLogFile('/business.log'));
		
		$returnArr = RequestUtil::httpGet($ticketUrl);
		//LogUtil::logs("wxindex.php initTicket returnJsonStr======>".$returnArr, getLogFile('/business.log'));
		
		if(0 == $returnArr["errcode"]){
			return $returnArr["ticket"]; 
		}
		return null;
	}
	
	public static function getBatchUserInfo($pdata){
		$batchUrl = "https://api.weixin.qq.com/cgi-bin/user/info/batchget?access_token=".WxUtil::getWxTokenFromDB();
		$userInfo = RequestUtil::httpPost($batchUrl, $pdata, 'post');
		return $userInfo;
	}

	public static function getUserList() {
		$remoteUrl = wxGetUseridList().WxUtil::getWxTokenFromDB();
		$userList = RequestUtil::httpPost($remoteUrl, "", 'post');
		return $userList;
	}
	
	
	/**
	 * 根据图片素材的id，拼装图文素材
	 * @param token
	 * @param mediaid 图片素材的id
	 */
	public static function uploadpicmsg($mediaid){
		$url = wxUploadPicMsg().WxUtil::getWxTokenFromDB();
		$title = $_POST["title"]; //  	图文消息的标题  不可空
		$sourceurl = $_POST["sourceurl"]; // 阅读原文的链接 可空
		$content = $_POST["content"]; // 图文  的 文， 不可空
		$digest = $_POST["digest"]; // 图片消息的描述， 可空
		$showcoverpic = $_POST["showcoverpic"]; // 是否显示封面，1为显示，0为不显示 
		
		$article = array("thumb_media_id"=>$mediaid,"author"=>"",
						 "title"=>$title,"content_source_url"=>$sourceurl,
						 "content"=>$content,"digest"=>$digest,
						 "show_cover_pic"=>$showcoverpic);
						 
		$articles[] = $article;
		$dataarr = array("articles"=>$articles);
		$data = JsonUtil::getJsonStrFromArray($dataarr);
		$response = RequestUtil::httpPost($url, $data, $action);
		if($response["errcode"] == 0) {
			/* response: 
			 * {
			   "type":"news",
			   "media_id":"CsEf3ldqkAYJAU6EJeIkStVDSvffUJ54vqbThMgplD-VJXXof6ctX5fI6-aYyUiQ",
			   "created_at":1391857799
			}*/
			return $response["media_id"];
		}
		return null;
		/*
		$data = '{
	   		"articles": [
				{
		            "thumb_media_id":$mediaid,
		            "author":"xxx",
					"title":"Happy Day",
					"content_source_url":"www.qq.com",
					"content":"content",
					"digest":"digest",
		            "show_cover_pic":"1"
				}
		    ]
		}'
		*/
	}

	/**
	 * 上传临时图片素材， 上限5000
	 * type  媒体文件类型，分别有图片（image）、语音（voice）、视频（video）和缩略图（thumb）
	 * 
	 */
	public static function uploadpic($meidaType, $mediapath){
		$url = wxUploadPic().self::getWxTokenFromDB()."&type=".$meidaType;
		//  curl 函数 CURLOPT_POSTFIELDS 里如果传的 一个数组 默认就会以multipart/form-data请求，所以 文件数据是这样写的：$file['media'] = "@/www/test.jpg";
		$data['media'] = "@".$mediapath;
		echo print_r($data);
		//$data = JsonUtil::getJsonStrFromArray($dataarr);
		$response = self::http_post($url, $data);
		echo print_r($response);
		if($response["errcode"] == 0) {
			/* response: 
			 * {
			   "type":"news",
			   "media_id":"CsEf3ldqkAYJAU6EJeIkStVDSvffUJ54vqbThMgplD-VJXXof6ctX5fI6-aYyUiQ",
			   "created_at":1391857799
			}*/
			return $response["media_id"];
		}
		return null;
		/*
		$data = '{
	   		"articles": [
				{
		            "thumb_media_id":$mediaid,
		            "author":"xxx",
					"title":"Happy Day",
					"content_source_url":"www.qq.com",
					"content":"content",
					"digest":"digest",
		            "show_cover_pic":"1"
				}
		    ]
		}'
		*/
	}
	
	
	public static function http_post($url,$param){
        $oCurl = curl_init();
        //下面判断https 和 http；因为钉钉接口是 Https请求
        if(stripos($url,"https://")!==FALSE){
                curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, false);
        }
        curl_setopt($oCurl, CURLOPT_URL, $url);
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($oCurl, CURLOPT_POST,true);
        curl_setopt($oCurl, CURLOPT_POSTFIELDS,$param);  
        $sContent = curl_exec($oCurl);
        $aStatus = curl_getinfo($oCurl);
        curl_close($oCurl);
        if(intval($aStatus["http_code"])==200){
                return $sContent;
        }else{
                return false;
        }
}
}
?>