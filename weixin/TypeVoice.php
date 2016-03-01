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
	
	/**
	 * 点击按钮菜单时，同步返回信息
	 */
	public function dealByAychReturn($postData){
		
		LogUtil::logs(" TypeEvent EventKey nodb=====> ".print_r($postData,true), getLogFile("/business.log"));
		$FromUserName = $postData["FromUserName"];
		$Event = $postData["Event"];
		$EventKey = $postData["EventKey"]; // 对应自定义的key 值
		LogUtil::logs(" TypeEvent EventKey nodb=====> ".$EventKey, getLogFile("/business.log"));
		// 拿事件类型 和 点击的按钮key值判断 可以决定业务类型
		if($Event == "CLICK") {
			$returnStr = "";
			$paramContent = array();
			$content = "";
			if($EventKey == getEnterKeyName()) {
				// 进入聊天室
				// 更新自己在聊天室的状态
				$this -> updateDbStatus('0', $FromUserName);
				// 回复文本消息
				$content = "您已进入聊天室, 可以和大家聊天啦";
			} else if($EventKey == getExitKeyName()) {
				// 退出聊天室
				// 更新自己在聊天室的状态
				$this -> updateDbStatus('1', $FromUserName);
				// 回复文本消息
				$content = "您已退出聊天室";
			}
			$paramsData['Content'] = $content;
			$paramsData['MsgType'] = 'text';
			// 同步响应
			echo parent::packageData($postData,$paramsData);
		} elseif($Event == "unsubscribe") {
			// 用户取消关注
			// 根据用户id查询用户基本信息
			$userInfo = parent::getUserInfoFromWx($FromUserName);
			LogUtil::logs(" TypeEvent unsubscribe userInfo=====> ".print_r($userInfo, true), getLogFile("/business.log"));
			$this -> synchronizedUserInfo($userInfo, $Event);
		} elseif($Event == "subscribe") {
			// 用户关注
			// 根据用户id查询用户基本信息
			$userInfo = parent::getUserInfoFromWx($FromUserName);
			LogUtil::logs(" TypeEvent subscribe userInfo=====> ".print_r($userInfo, true), getLogFile("/business.log"));
			$this -> synchronizedUserInfo($userInfo, $Event);
		}
	}
	
	public function deal($postData){
		LogUtil::logs("TypeVoice deal=====> ".print_r($postData,true), getLogFile("/business.log"));
		$FromUserName = $postData["FromUserName"];
		$Recognition = $postData["Recognition"];
		
		$paramsData['Content'] = empty($Recognition) ? "没听清，请再说一次" : $Recognition;
		$paramsData['MsgType'] = 'text';
		// 同步响应
		echo parent::packageData($postData,$paramsData);
		
	}

	public function updateDbStatus($userisin, $openid){
		global $db;
		$db->exec("update wx_group_user set userisin='$userisin' where openid ='$openid'");
	}
	
	/**
	 * 将用户信息同步到数据库
	 */
	public function synchronizedUserInfo($userInfo, $Event){
		global $db;
		$openid = $userInfo["openid"];
		$subscribe = $userInfo["subscribe"];
		$currtime = DateUtil::getCurrentTime();
		
		$sql = "";
		if($Event == "subscribe") {
			LogUtil::logs("TypeEvent synchronizedUserInfo insert=====> ", getLogFile("/business.log"));
			$nickname = $userInfo["nickname"];
			$nickname = str_replace("🌻", "*", $nickname);
			$sex = $userInfo["sex"];
			$headimgurl = $userInfo["headimgurl"];
			
			$sql = $sql.", nickname='$nickname', sex='$sex'";
			LogUtil::logs("TypeEvent.php synchronizedUserInfo  ：nickname ====>".$nickname, getLogFile('/business.log'));
			
			// 关注的情况有关注和重新关注，所以使用on duplicate的方法
			$sql = "INSERT INTO `wx_user_info` (openid, nickname, sex, subscribe, subscribe_time, headimgurl) 
			VALUES ('$openid', '$nickname', '$sex', '$subscribe', '$currtime', '$headimgurl') 
			ON DUPLICATE KEY UPDATE subscribe='$subscribe', nickname='$nickname', subscribe_time='$currtime', headimgurl='$headimgurl'";
			
		} else {
			// 取消关注
			LogUtil::logs("TypeEvent synchronizedUserInfo update=====> ", getLogFile("/business.log"));
			$sql = "update `wx_user_info` set subscribe_time='$currtime', subscribe='$subscribe' where openid = '$openid' ";
		}
		
		$db->exec($sql);
	}
	
}
?>