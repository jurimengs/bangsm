<?php
require_once("globleconfig.php");
require_once('LogUtil.php');
require_once("XmlUtil.php");
require_once("DateUtil.php");
require_once("JsonUtil.php");
require_once("RequestUtil.php");
require_once("TypeParent.php");
require_once("../configs/db.inc.php");

class TypeVoice extends TypeParent{
	
	public function deal($postData){
		LogUtil::logs("TypeVoice deal=====> ".print_r($postData,true), getLogFile("/business.log"));
		$FromUserName = $postData["FromUserName"];
		$Recognition = $postData["Recognition"];
		
		$paramsData['Content'] = empty($Recognition) ? "没听清，请再说一次" : $Recognition;
		$paramsData['MsgType'] = 'text';
		// 同步响应
		echo parent::packageData($postData,$paramsData);
		
	}
	
}
?>