<?php
//php 服务器：
// http://bangmaisiw.w107.mc-test.com/weixin/wxindex.php 
// http://payment-test.sandpay.com.cn/weixin/wxindex.php
//java 服务器
// http://payment-test.sandpay.com.cn/wx/validate.do
/// TODO 把用户组信息都缓存到文件中
require_once("globleconfig.php");
require_once('LogUtil.php');
require_once("XmlUtil.php");
require_once("TypeParent.php");
require_once("TypeEvent.php");
require_once("TypeText.php");

$echostr = "";
if(isset($_GET["echostr"])) {
	$echostr = $_GET["echostr"];
}
if(isset($_GET["signature"])) {
	$signature = $_GET["signature"];
}
if(isset($_GET["timestamp"])) {
	$timestamp = $_GET["timestamp"];
}
if(isset($_GET["nonce"])) {
	$nonce = $_GET["nonce"];
}

LogUtil::logs(" index.php newwxindex=====> ", getLogFile('/business.log'));
LogUtil::logs("数据检查".print_r($GLOBALS["HTTP_RAW_POST_DATA"],true), getLogFile('/business2.log'));
if( !empty($_GET) ){
	if(checkSignature($signature, $timestamp, $nonce) ){
		LogUtil::logs(" checkSignature =====> token验证成功", getLogFile('/business.log'));
		if( $echostr) {
			echo $echostr;
			exit();
		}
	} else {
		LogUtil::logs(" checkSignature =====> token验证失败", getLogFile('/business.log'));
		exit();
	}
}

dealRequest($GLOBALS["HTTP_RAW_POST_DATA"]);

function dealRequest($postXml){
	$postArray = xml2array($postXml);
	$postData  = $postArray['xml'];
	//LogUtil::logs("dealRequest ====>".print_R($postData,true), getLogFile("/business.log"));
	if($postData['MsgType'] == "event") {
		$te = new TypeEvent();
		$te -> dealByAychReturn($postData);
	} elseif($postData['MsgType'] == "text"){
		$tt = new TypeText();
		$tt -> deal($postData);
	}
}

function checkSignature($signature, $timestamp, $nonce){
	$tmpArr = array(localToken(), $timestamp, $nonce);
	sort($tmpArr, SORT_STRING);
	$tmpStr = implode( $tmpArr );
	$tmpStr = sha1( $tmpStr );
	if( strtoupper($tmpStr) == strtoupper($signature) ){
		return true;
	}else{
		return false;
	}
}


?>