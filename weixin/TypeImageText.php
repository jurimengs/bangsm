<?php
require_once("globleconfig.php");
require_once('LogUtil.php');
require_once("XmlUtil.php");
require_once("DateUtil.php");
require_once("JsonUtil.php");
require_once("RequestUtil.php");
require_once("TypeParent.php");
require_once("DBUtil.php");
require_once("../configs/db.inc.php");

class TypeImageText extends TypeParent{
	/**
	 * 通过客服接口发送单条图文消息
	 * $openid 发送目标
	 * $title 标题
	 * $description 描述 
	 * $linkurl, 
	 * $picurl
	 */
	function sendImageTextMsg($openid, $title, $description, $linkurl, $picurl){
		$article = array("title"=>$title, "description"=>$description,
             					"url"=>$linkurl, "picurl"=>$picurl);
		$articles[] = $article;
		$news = array("articles"=>$articles);
		
		$data = JsonUtil::getJsonStrFromArray(array("touser" => $openid, "msgtype"=>"news", "news"=>$news));
		//LogUtil::logs("queryGroupUserAndReplyMsg data ====>".$data, getLogFile("/business.log"));
		parent::sendMsgByService($data);
	}
	
	/**
	 * 通过客服接口发送多条图文消息
	 * $openid  
	 * $articles  参考sendImageTextMsg
	 */
	function sendMultiImageTextMsg($openid, $articles){
		$news = array("articles"=>$articles);
		
		$data = JsonUtil::getJsonStrFromArray(array("touser" => $openid, "msgtype"=>"news", "news"=>$news));
		//LogUtil::logs("queryGroupUserAndReplyMsg data ====>".$data, getLogFile("/business.log"));
		parent::sendMsgByService($data);
	}
	
	/**
	 * 通过客服接口发送多条图文消息到多个人
	 * $openid  
	 * $articles  参考sendImageTextMsg
	 */
	function sendMultiImageTextMsgToMultiUser($openidarr, $articles){
		$news = array("articles"=>$articles);
		foreach($openidarr as $openid) {
			$data = JsonUtil::getJsonStrFromArray(array("touser" => $openid, "msgtype"=>"news", "news"=>$news));
			parent::sendMsgByService($data);
		}
	}
}
?>