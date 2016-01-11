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
	
}
?>