<?php
require 'inc.php';
require_once '../../weixin/globleconfig.php';
require_once '../../weixin/WxUtil.php';
require_once '../../weixin/TypeImageText.php';
require_once '../../weixin/TypeParent.php';
require_once '../../weixin/DateUtil.php';
require_once '../../weixin/RequestUtil.php';
require_once '../../weixin/LogUtil.php';
require_once '../../weixin/StringUtil.php';
require_once("../includes/Pager.class.php");

if (empty($_SESSION["cn_sysadmin"])) {
	die("<script>top.location.href='login.php'</script>");
}

$action = empty($_GET["action"]) ? '' : $_GET["action"];
if ($action == "sendnewmsg") {
	// 页面推送按钮（发送单条图文消息）
	sendnewmsg(false);
} else if ($action == "sendmultinewmsg") {
	// 发送多条图文消息
	//sendmultinewmsg();
	sendmultinewmsgByService();
}

/**
 * 调用群发接口，发送单条图文消息，服务号每个月4次
 * debugmode 是否开启调试模式。true：使用预览接口发送到指定openid
 */
function sendnewmsg($debugmode) {
	// 当前php文件所在目录
	//define('DIR_ROOT', str_replace('\\', '/', dirname(__FILE__)));
	// 项目根目录
	define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);
	//define('DIR_ROOT', "/wwwroot/");
	
	$courseid = $_GET["courseid"];
	// 根据courseid查询对应的课程（推送）信息
	$querysql = "select * from cn_news where id=$courseid";
	global $db;
	global $smarty;
	$res = $db->query($querysql);
	$row=$db->fetch($res);
	
	// TODO 先保存图片素材，得到media_id， 页面提示用户，图片素材数量上限
	// 图片（image）、语音（voice）、视频（video）和缩略图（thumb）
	$meidaType = "image";
	//
	
	//获取当前文件物理路径
	$tmp_file = DIR_ROOT."/".$row["simage"];
	//echo $tmp_file;
	if (file_exists($tmp_file)) {
		// 调素材管理接口上传图片，得到meidaid
		$response = WxUtil::uploadpic($meidaType, $tmp_file);
		$picmediaid = $response["media_id"];
		$title = $row["title"];
		$sourceurl = "http://bangmaisiw.w107.mc-test.com/wap/Course-Details.php?id=".$courseid;
		$content = $row["contents"];
		$digest = "";
		$showcoverpic = "0"; // 是否显示封面，1为显示，0为不显示
		$pictextResp = WxUtil::uploadpicmsg($picmediaid, $title, $sourceurl, $content, $digest, $showcoverpic);
		// 图文消息 media_id
		$pictextMediaid = $pictextResp["media_id"];
		// 拿到mediaid, 就可以发起推送了
		// 先获取openid列表
		$openidsql = "select openid from wx_user_info where subscribe = '1' ";
		$openidres = $db -> query($openidsql);
		// php的json格式:array(""=>"")
		$openidList = $db -> fetch_all($openidres);
		// 循环下，转成无key的值数组
		$openidarr = array();
		foreach($openidList as $openid) {
			$openidarr[] = $openid["openid"];
		}
		//echo print_r($openidarr);
		$tp = new TypeParent();
		if($debugmode) {
			$yulanopenid = "osp6swrNZiWtEuTy-Gj1cBVA1l38";
			echo $tp -> batchSendPicMsgYulan($yulanopenid, $pictextMediaid);
		} else {
			echo $tp -> batchSendPicMsg($openidarr, $pictextMediaid);
		}
		return;
	} else {
		echo "文件不存在:".$row["image"];
		return;
	}

}

/**
 * 调用群发接口，发送多条图文消息，服务号每个月4次
 */
function sendmultinewmsg() {
	// 当前php文件所在目录
	//define('DIR_ROOT', str_replace('\\', '/', dirname(__FILE__)));
	// 项目根目录
	define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);
	//define('DIR_ROOT', "/wwwroot/");
	
	$courseids = $_POST["courseids"];
	/*$inTemp = "";
	foreach($courseids as $courseid){
		$inTemp = $inTemp.$courseid.",";
	}
	$in = substr($inTemp, 0, strlen($inTemp) -1);
	*/
	// 根据courseid查询对应的课程（推送）信息
	$querysql = "select * from cn_news where id in  (".$courseids.")";
	global $db;
	global $smarty;
	$res = $db->query($querysql);
	
	$rowlist=$db->fetch_all($res);
	// 先判断下是否存在不满足条件的数据
	$errortitle = "";
	foreach($rowlist as $row){
		if(empty($row["simage"])) {
			$errortitle .= "<font color='red'>\"".$row["id"]."\"</font><br />";
		}
	}
	if(!empty($errortitle)) {
		echo "编号为：<br />".$errortitle."的信息不完善，请重新编辑，添加图片、缩略图信息";
		return;
	}
	
	// TODO 先保存图片素材，得到media_id， 页面提示用户，图片素材数量上限
	// 图片（image）、语音（voice）、视频（video）和缩略图（thumb）
	$meidaType = "image";
	//
	// 循环所有的消息，制成成图片消息，拿到media id 数组
	$articles = array();
	$showcoverpic = "0"; // 是否显示封面，1为显示，0为不显示
	
	foreach($rowlist as $row){
		//获取当前文件物理路径
		$tmp_file = DIR_ROOT."/".$row["simage"];
		//echo $tmp_file;
		if (file_exists($tmp_file)) {
			// 先循环制作所有的图片素材, 调素材管理接口上传图片，得到meidaid
			$response = WxUtil::uploadpic($meidaType, $tmp_file);
			if($response["errcode"] == 0) {
				// 制作成功的，拼成一条信息
				$picmediaid = $response["media_id"];
				$title = $row["title"];
				$sourceurl = "http://bangmaisiw.w107.mc-test.com/wap/Course-Details.php?id=".$row["id"];
				$content = $row["contents"];
				$digest = "";
				
				$article = array("thumb_media_id" => $picmediaid,"author"=>"",
						 "title"=>$title,"content_source_url"=>$sourceurl,
						 "content"=>$content,"digest"=>$digest,
						 "show_cover_pic"=>$showcoverpic);
						 
				$articles[] = $article;
			} else {
				LogUtil::logs("批量创建图片素材失败:消息来源id：".$row["id"]."，错误信息：".$response["errmsg"], getLogFile("/business.log"));
			}
		} else {
			LogUtil::logs("文件不存在:".$row["image"], getLogFile("/business.log"));
		}
	}
	
	$pictextResp = WxUtil::uploadmultipicmsg($articles);
	//echo print_r($pictextResp);
	// 图文消息 media_id
	if($pictextResp["errcode"] == 0) {
		$pictextMediaid = $pictextResp["media_id"];
		// 拿到mediaid, 就可以发起推送了
		// 先获取openid列表
		$openidsql = "select openid, nickname from wx_user_info where subscribe = '1' ";
		$openidres = $db -> query($openidsql);
		// php的json格式:array(""=>"")
		$openidList = $db -> fetch_all($openidres);
		// 循环下，转成无key的值数组
		$openidarr = array();
		$lognickname = "";
		foreach($openidList as $openid) {
			$lognickname .= $openid["nickname"].",";
			$openidarr[] = $openid["openid"];
		}
		//echo print_r($openidarr);
		$tp = new TypeParent();
		echo $tp -> batchSendPicMsg($openidarr, $pictextMediaid);
		echo "<br />消息发送到：".$lognickname;
//		$yulanopenid = "osp6swvOvVa1aXcjbFGui0Ur88V4";
//		echo $tp -> batchSendPicMsgYulan($yulanopenid, $pictextMediaid);
	
	}else {
		echo "消息发送失败：".$pictextResp["errmsg"];
	}
}

/**
 * 调用客服接口接口，发送多条图文消息，服务号不限制次数，但是要限制48小时内与微信公众号有互动的用户才能收到
 */
function sendmultinewmsgByService() {
	// 当前php文件所在目录
	//define('DIR_ROOT', str_replace('\\', '/', dirname(__FILE__)));
	// 项目根目录
	define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);
	//define('DIR_ROOT', "/wwwroot/");
	
	$courseids = $_POST["courseids"];
	/*$inTemp = "";
	foreach($courseids as $courseid){
		$inTemp = $inTemp.$courseid.",";
	}
	$in = substr($inTemp, 0, strlen($inTemp) -1);
	*/
	// 根据courseid查询对应的课程（推送）信息
	$querysql = "select * from cn_news where id in  (".$courseids.")";
	global $db;
	global $smarty;
	$res = $db->query($querysql);
	
	$rowlist=$db->fetch_all($res);
	// 先判断下是否存在不满足条件的数据
	$errortitle = "";
	foreach($rowlist as $row){
		if(empty($row["simage"])) {
			$errortitle .= "<font color='red'>\"".$row["id"]."\"</font><br />";
		}
	}
	if(!empty($errortitle)) {
		echo "编号为：<br />".$errortitle."的信息不完善，请重新编辑，添加图片、缩略图信息";
		return;
	}
	
	// TODO 先保存图片素材，得到media_id， 页面提示用户，图片素材数量上限
	// 图片（image）、语音（voice）、视频（video）和缩略图（thumb）
	$meidaType = "image";
	//
	// 循环所有的消息，制成成图片消息，拿到media id 数组
	$articles = array();
	$showcoverpic = "0"; // 是否显示封面，1为显示，0为不显示
	
	foreach($rowlist as $row){
		//获取当前文件物理路径
		$tmp_file = DIR_ROOT."/".$row["simage"];
		//echo $tmp_file;
		if (file_exists($tmp_file)) {
			// 先循环制作所有的图片素材, 调素材管理接口上传图片，得到meidaid
			$response = WxUtil::uploadPicGetPicUrl($meidaType, $tmp_file);
			//echo print_r($response);
			if(!empty($response["url"])) {
				$picurl = $response["url"];
				$title = $row["title"];
				$sourceurl = "http://bangmaisiw.w107.mc-test.com/wap/Course-Details.php?id=".$row["id"];
				$content = $row["contents"];
				
				$article = array("title"=>$title, "description"=>"",
		             					"url"=>$sourceurl, "picurl"=>$picurl);
								
				$articles[] = $article;
			} else {
				LogUtil::logs("批量创建图片素材失败:消息来源id：".$row["id"]."，错误信息：".$response["errmsg"], getLogFile("/business.log"));
			}
		} else {
			LogUtil::logs("文件不存在:".$row["image"], getLogFile("/business.log"));
		}
	}
	
	// 拿到mediaid, 就可以发起推送了
	// 先获取openid列表
	$openidsql = "select openid, nickname from wx_user_info where subscribe = '1' ";
	$openidres = $db -> query($openidsql);
	// php的json格式:array(""=>"")
	$openidList = $db -> fetch_all($openidres);
	// 循环下，转成无key的值数组
	$openidarr = array();
	$lognickname = "";
	foreach($openidList as $openid) {
		$lognickname .= $openid["nickname"].",";
		$openidarr[] = $openid["openid"];
	}
	//echo print_r($openidarr);
	$tit = new TypeImageText();
	echo $tit -> sendMultiImageTextMsgToMultiUser($openidarr, $articles);
	echo "<br />消息发送到：".$lognickname;
	
}
?>