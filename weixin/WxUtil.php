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
}
?>