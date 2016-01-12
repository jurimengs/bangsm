<?php

require_once("globleconfig.php");
require_once('LogUtil.php');
require_once("../configs/db.inc.php");

class DBUtil {
	/**
	 * $msgtype 消息类型: 0表示用户发送  1表示管理员回复 2表示管理员群发消息 3 自动回复  4聊天室信息 5用户私聊管理员
	 */
	public static function saveMsg($createby, $content, $createtime, $replyid, $msgtype, $status){
		global $db;
		LogUtil::logs("saveMsg =======>", getLogFile("/business.log"));
		$db->exec("INSERT INTO `wx_user_msg` (createby, content, createtime, replyid, msgtype, status) 
		VALUES ('$createby', '$content', '$createtime', '$replyid', '$msgtype', '$status')");
	}
	
	/**
	 */
	public static function updateMsg($sql){
		global $db;
		LogUtil::logs("saveMsg =======>".$sql, getLogFile("/business.log"));
		$db->exec($sql);
	}
}
?>