<?php

require_once('LogUtil.php');
require_once('RequestUtil.php');
require_once('WxUtil.php');

class TypeParent {
		
	/**
	 * 编辑文本消息模板
	 * @param content
	 * @return array
	 */
	public function createTextMessageJson($content){
		$contentTemp = array("content"=>$content);
		$paramContent = array("msgtype"=>"text", "text"=>$contentTemp);
		// json_encode 完了返回的是json str
		//return json_encode($paramContent);
		return $paramContent;
	}
	
	/**
	 *  同步返回的消息
	 */
	public function packageData($postData,$paramsData){
		//LogUtil::logs(" index.php send_msg =====> ".$postData, getLogFile('/business.log'));
		
		$data = array();
		if( !empty($paramsData) ){
			$commData['ToUserName'] = $postData['FromUserName'];
			$commData['FromUserName'] = $postData['ToUserName'];
			$commData['CreateTime'] = time();
			$data = array_merge($commData,$paramsData);
		}
		//LogUtil::logs(" index.php send_msg =====> ".$data, getLogFile('/business.log'));
		if( !empty($data) ){
			$xml = array2xml($data,'xml');
		}else{
			$xml = '';
		}
		return $xml;
	}
	
	/**
	 * 客服消息推送
	 */
	public function sendMsgByService($data){
		$postUrl = wxSendMessageByService().WxUtil::getWxTokenFromDB();
		//LogUtil::logs("FFFFFFFFFFFFFFFF；".$data, getLogFile("/business.log"));
		$returnsArr = RequestUtil::httpPost($postUrl, $data, 'post');
		//LogUtil::logs("TypeParent sendMsgByService ====> ".$returnsArr["errmsg"], getLogFile("/business.log"));
		return $returnsArr;
	}

	
	public function getUserInfoFromWx($openId){
		//	$batchUrl = "https://api.weixin.qq.com/cgi-bin/user/info/batchget?access_token=".WxUtil::getWxTokenFromDB();
		//	$pdata = '{
		//  "user_list": [
		//	        {
		//	            "openid": "'.$openId.'", 
		//	            "lang": "zh-CN"
		//	        }
		//	    ]
		//	}';
		//	RequestUtil::httpPost($batchUrl, $pdata, 'post');
			
		$userInfoUrl = wxGetUserBaseinfo().WxUtil::getWxTokenFromDB()."&openid=".$openId;
		//LogUtil::logs("wxindex.php getUserInfoFromWx userInfoUrl====> ".$userInfoUrl, getLogFile("/business.log"));
		$userInfo = RequestUtil::httpGet($userInfoUrl);
		return $userInfo;
	}
	
	public function batchSendPicMsg($openidarr, $mediaid){
		$data = array("touser"=>$openidarr, "mpnews"=>array("media_id"=>$mediaid), "msgtype"=>"mpnews");
		$datastr = JsonUtil::getJsonStrFromArray($data);
		//echo print_r($datastr);
		$url = wxBatchSendPicMsg().WxUtil::getWxTokenFromDB();
		$response = RequestUtil::httpPost($url, $datastr, 'post');
		//echo print_r($response);
		if($response['errcode'] == 0) {
			return "图文消息群发成功";
		}
		return $respArr["errcode"].":".$respArr["errmsg"];
	}
	
	/**
	 * 图文消息推送预览接口
	 */
	public function batchSendPicMsgYulan($openidarr, $mediaid){
		$yulanurl = "https://api.weixin.qq.com/cgi-bin/message/mass/preview?access_token=";
		$data = array("touser"=>$openidarr, "mpnews"=>array("media_id"=>$mediaid), "msgtype"=>"mpnews");
		$datastr = JsonUtil::getJsonStrFromArray($data);
		//echo print_r($datastr);
		$url = $yulanurl.WxUtil::getWxTokenFromDB();
		$response = RequestUtil::httpPost($url, $datastr, 'post');
		if($response['errcode'] == 0) {
			return "图文消息群发成功";
		}
		return $respArr["errcode"].":".$respArr["errmsg"];
	}
}
?>