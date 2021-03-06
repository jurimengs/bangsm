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

class TypeImage extends TypeParent{
	function deal($postData){
		// TODO 满足一定条件的flag信息要定期删除，否则会积压大量无用信息
		
		// 先判断用户是否在某个组中
		$FromUserName = $postData["FromUserName"];
		$wxcreatetime = $postData["CreateTime"];
		
		// 重复消息处理机制：
		$existmsg = $this -> isExist($FromUserName, $wxcreatetime);
		if($existmsg) {
			// 如果存在
			LogUtil::logs("TypeText Content 已存在消息，忽略本次请求 ====>".$flagStr, getLogFile("/business.log"));
			exit();
		}
		
		$userGroupId = $this -> isInGroup($FromUserName);
		if($userGroupId != null) {
			// 表示在组里
			// 先同步响应
//			$paramsData['Content'] = "您的消息已发送，请等待回复";
//			$paramsData['MsgType'] = 'text';
//			echo parent::packageData($postData,$paramsData);
			echo "success";
			// 异步处理业务
			// 查询所有的组员,并向其发送信息
			$this -> queryGroupUserAndReplyMsg($userGroupId, $postData);
		}
	}
	
	/**
	 * flagStr : openid+createtime 
	 */
	function isExist($openid, $wxcreatetime){
		$currentTime = DateUtil::getCurrentTime();
		$flagStr = $openid.$wxcreatetime;
		
		//LogUtil::logs("TypeText isExist flagStr ====>".$flagStr, getLogFile("/business.log"));
		global $db;
		$duplicateMsgFlag = $db->fetch($db->query("SELECT id FROM wx_duplicate_msg_flag where concat(openid, wxcreatetime) = '$flagStr'"));
		if($duplicateMsgFlag) {
			//LogUtil::logs("isInGroup userisin ====>".$duplicateMsgFlag['id'], getLogFile("/business.log"));
			return true;
		}
		
		// 如果不存在，执行插入
		$sql_saveFlag = "INSERT INTO `wx_duplicate_msg_flag` (wxcreatetime, openid, msgid, createtime) 
		VALUES ('$wxcreatetime', '$openid', '', '$currentTime') ";
		$db->exec($sql_saveFlag);
		
		return false;
	}
	
	/**
	 * 查询openid是否在组中，返回usergroup信息
	 */
	function isInGroup($openid){
		//LogUtil::logs("TypeText isInGroup openid ====>".$openid, getLogFile("/business.log"));
		global $db;
		$userGroupObj = $db->fetch($db->query("SELECT * FROM wx_group_user where openid = '$openid'"));
		if($userGroupObj) {
			$userisin = $userGroupObj['userisin'];
			//LogUtil::logs("isInGroup userisin ====>".$userisin, getLogFile("/business.log"));
			if($userisin == '0') {
				return $userGroupObj['groupid'];
			}
		}
		return null;
	}
	
	/**
	 * 查到用户组里面的所有组员，再向其发送消息 
	 */
	function queryGroupUserAndReplyMsg($userGroupId, $postData){
		global $db;
		// 发消息的人自己 
		$userSelfOpenid = $postData["FromUserName"];
		$content = $postData["Content"];
		$createtime = DateUtil::getCurrentTime();
		$mediaid = $postData["MediaId"];
		
		// 用户发送的信息，要保存到数据库
		// 消息类型: 0表示用户发送  1表示管理员回复 2表示管理员群发消息 3 自动回复  4聊天室信息
		DBUtil::saveMsg($userSelfOpenid, "图片消息", $createtime, "" , "4", "0");
		
		// 查询所有的组员
		$arr = array();
		
		// TODO 这个$res可以缓存到文件中
		$res=$db->query("SELECT * FROM wx_group_user where groupid = '$userGroupId' and userisin = '0' ");
		$row=$db->fetch_all($res);
		foreach($row as $val){
			// 循环每个人推送一条消息 
			$openid = $val['openid'];
			// 从组中除去发信息者自己
			if($userSelfOpenid != $openid) {
				// 拼接
				/*{
				    "touser":"OPENID",
				    "msgtype":"image",
				    "image":
				    {
				      "media_id":"MEDIA_ID"
				    }
				}*/
				$paramContent = array("touser"=>$openid, "msgtype"=>"image", "image"=>array("media_id"=>$mediaid));
				
				$data = JsonUtil::getJsonStrFromArray($paramContent);
				LogUtil::logs("queryGroupUserAndReplyMsg data ====>".$data, getLogFile("/business.log"));
				parent::sendMsgByService($data);
			}
		}
		return getSuccessStr();
	}
}
?>