<?php
require 'inc.php';
require_once '../weixin/globleconfig.php';
require_once '../weixin/WxUtil.php';
require_once '../weixin/DateUtil.php';
require_once '../weixin/RequestUtil.php';
require_once '../weixin/LogUtil.php';
require_once '../weixin/StringUtil.php';
require_once ("../includes/Pager.class.php");

if (empty($_SESSION["cn_sysadmin"])) {
	die("<script>top.location.href='login.php'</script>");
}

$action = empty($_GET["action"]) ? '' : $_GET["action"];
if ($action == "") {
	// 显示已发送的消息列表
	showlist();
} elseif ($action == "tonewpage") {
	// 跳转发送新图文消息页面
	tonewpage();
} elseif ($action == "sendnewmsg") {
	// 跳转发送新图文消息页面
	sendnewmsg();
}

function showlist() {
	global $db;
	global $smarty;

	$page_size = getPageSize();
	// 每页显示的条目数
	$sub_pages = getSubPages();
	// 每次显示的页数
	$current_page = empty($_GET["p"]) ? "1" : $_GET["p"];
	// 当前被选中的页

	/*$res = $db->query("SELECT a.id, a.groupname FROM wx_group_info a");
	 $rowList=$db->fetch_all($res);*/

	// 组分页查询
	$groupsql = "SELECT a.id, a.groupname FROM wx_group_info a";
	$res = $db -> query_page_list2($groupsql, $page_size, $current_page);
	$rowList = $db -> fetch_all($res);

	// 查总记录数
	$countres = $db -> query("SELECT count(1) as totalcount from wx_group_info a");
	$countObj = $db -> fetch($countres);
	// 总条目数
	$nums = $countObj["totalcount"];

	// 拿到当前页组的id
	$groupids = "";
	foreach ($rowList as $row) {
		$groupids = $groupids . $row["id"] . ",";
	}
	$in = StringUtil::sublaststr($groupids);

	$userlistsql = "SELECT a.openid , a.groupid , b.nickname
			FROM wx_group_user a 
			left join wx_user_info b 
			on a.openid = b.openid 
			where b.openid is not null
			and a.groupid in ($in)";
	//echo $userlistsql;

	$groupUserList = $db -> fetch_all($db -> query($userlistsql));
	//var_dump($groupUserList);
	$groupRes = array();
	foreach ($rowList as $row) {
		$groupid = $row["id"];
		$groupname = $row["groupname"];

		$userlistTemp = array();
		foreach ($groupUserList as $groupUser) {
			if ($groupUser["groupid"] == $groupid) {
				// TODO 可以考虑移除已归纳过的元素
				$userlistTemp[] = $groupUser;
			}
		}

		$groupRes[] = array('groupid' => $groupid, 'groupname' => $groupname, 'userList' => $userlistTemp);
	}
	//echo print_r($groupRes);

	$pager = new Pager($page_size, $nums, $current_page, $sub_pages, false);
	$pagerlinker = $pager -> commonPager();
	$smarty -> assign('pager', $pagerlinker);

	$smarty -> assign('groupUserArray', $groupRes);

	$smarty -> display('sysadmin/batchsendpicmsglist.html');
}

function tonewpage() {
	//global $db;
	global $smarty;
	//	$res=$db->query("SELECT * from wx_user_info");
	//	$rowList=$db->fetch_all($res);
	//	$smarty->assign('allUserArray',$rowList);
	$smarty -> display('sysadmin/batchsendpicmsg.html');
}

function sendnewmsg() {
	// TODO 先保存图片素材，得到media_id， 页面提示用户，图片素材数量上限
	// 图片（image）、语音（voice）、视频（video）和缩略图（thumb）
	$meidaType = "image";
	$media = $_FILES["media"];
	//
	
	define('DIR_ROOT', str_replace('\\', '/', dirname(__FILE__)));
	//获取当前文件物理路径
	$tmp_file_path = DIR_ROOT . '/tmp/';
	//在根目录下增加tmp目录的路径
	if (is_dir($tmp_file_path)) {
		//echo "tmp文件夹存在！";
	} else {
		mkdir($tmp_file_path, 0700);
	}

	$maxsize = 2048000;
	if ((($media["type"] == "image/gif") || ($media["type"] == "image/jpeg") || ($media["type"] == "image/pjpeg")) && ($media["size"] < $maxsize)) {
		if ($media["error"] > 0) {
			echo "Error: " . $media["error"] . "<br />";
			return;
		} else {
//			echo "filename: " . $media["name"] . "<br />";
//			echo "Type: " . $media["type"] . "<br />";
//			echo "Size: " . ($media["size"] / 1024) . " Kb<br />";
//			echo "Stored in: " . $media["tmp_name"];

			if (file_exists($tmp_file_path.$media["name"])) {
				//echo $tmp_file_path.$media["name"] . " already exists. ";
			} else {
				move_uploaded_file($media["tmp_name"], $tmp_file_path.$media["name"]);
				//echo "Stored in: " . $tmp_file_path.$media["name"];
				// 保存到本地后，上传
			}
			// 调素材管理接口上传图片，得到meidaid
			$picmediaid = WxUtil::uploadpic($meidaType, $tmp_file_path.$media["name"]);
			// 调保存接口，保存图文消息, 得到图文media_id
			WxUtil::uploadpicmsg($meidaType, $tmp_file_path.$media["name"]);
		}
	} else {
		echo "文件类型、大小不符合要求";
		return;
	}


	/*
	 // TODO 先调保存接口，保存图文消息, 得到media_id
	 $mediaid = uploadpicmsg($picmediaid);
	 // TODO 3 发送
	 // 先获取openid列表
	 $openidarr;

	 $tp = new TypeParent();
	 $tp -> batchSendPicMsg($openidarr, $mediaid);
	 */
	// 添加后，重新再查一遍
	showlist();
}

function deleteselected() {
	$groupuserids = $_POST["groupuserids"];
	$inTemp = "";
	foreach ($groupuserids as $groupuserid) {
		$inTemp = $inTemp . $groupuserid . ",";
	}

	$in = substr($inTemp, 0, strlen($inTemp) - 1);
	if ($in != "") {
		global $db;
		$sql = "delete from wx_group_user where id in (" . $in . ")";
		//echo "===>sql".$sql;
		$db -> exec($sql);
		// 删除后，重新再查一遍
		showlist();
	}
}

function groupusermanage() {
	$groupid = $_GET["groupid"];
	if (empty($groupid)) {
		return;
	}

	global $db;
	global $smarty;
	// 先查本组员
	$userlistsql = "SELECT a.openid , a.groupid , b.nickname FROM wx_group_user a
left join wx_user_info b
on a.openid = b.openid
where b.openid is not null and a.groupid ='$groupid'";
	$groupUserList = $db -> fetch_all($db -> query($userlistsql));

	// 再查所有不在本组的微信用户
	$otherusersql = "select * from wx_user_info where openid not in
(select openid from wx_group_user where groupid = '$groupid')";
	$otheruserlist = $db -> fetch_all($db -> query($otherusersql));

	// 本组已有的用户列表
	$smarty -> assign('groupUserList', $groupUserList);
	// 所有用户列表
	$smarty -> assign('otheruserlist', $otheruserlist);
	// 目标组id
	$smarty -> assign('groupid', $groupid);
	$smarty -> display('sysadmin/wxgroupusermanage.html');
}

function deletefromgroup() {
	$groupid = $_POST["groupid"];
	$openids = $_POST["openid"];
	//echo print_r($groupid);
	echo print_r($openids);

	$inTemp = "";
	foreach ($openids as $openid) {
		$inTemp = $inTemp . "'" . $openid . "',";
	}

	$in = substr($inTemp, 0, strlen($inTemp) - 1);
	if ($in != "") {
		global $db;
		$sql = "delete from wx_group_user where openid in (" . $in . ")";
		echo $sql;
		//echo "===>sql".$sql;
		$db -> exec($sql);
		// 删除后，重新再查一遍
		showlist();
	}
}

function addtogroup() {
	$groupid = $_POST["groupid"];
	$openids = $_POST["openid"];

	global $db;
	$groupInfo = $db -> fetch($db -> query("select groupname from wx_group_info where id ='$groupid' "));
	//var_dump($groupInfo);
	$groupname = $groupInfo["groupname"];

	$createtime = DateUtil::getCurrentTime();
	$createby = $_SESSION['cn_sysadmin']['user_id'];
	$userisin = "1";

	// 先判断是有否存在的记录
	$inTemp = "";
	foreach ($openids as $openid) {
		$inTemp = $inTemp . "'" . $openid . "',";
	}

	$in = substr($inTemp, 0, strlen($inTemp) - 1);

	// 先删除openid
	$db -> exec("delete from wx_group_user where openid in (" . $in . ") ");

	foreach ($openids as $openid) {
		$sql = "insert into wx_group_user (groupid, openid, groupname, createtime, createby, userisin) values (
'$groupid', '$openid', '$groupname', '$createtime', '$createby', '$userisin'
)";
		$db -> exec($sql);
	}
	// 重新再查一遍
	showlist();
}

function initUser() {
	$remoteTemp = WxUtil::getUserList();

	if (!empty($remoteTemp)) {
		$remoteUsers = $remoteTemp["data"];
		if (!empty($remoteUsers)) {

			global $db;
			global $smarty;
			$res = $db -> query("SELECT openid FROM wx_user_info ");
			$rowList = $db -> fetch_all($res);

			$user_list = array();
			foreach ($remoteUsers["openid"] as $openid) {
				if (!in_array(array("openid" => $openid), $rowList)) {
					//echo $openid." is not in<br />";
					// 组装一个信息
					$toqueryuser = array("openid" => $openid, "lang" => "zh-CN");
					$user_list[] = $toqueryuser;
				}
			}
			$pdata = JsonUtil::getJsonStrFromArray(array("user_list" => $user_list));

			$batchUserInfo = WxUtil::getBatchUserInfo($pdata);

			$user_info_list = $batchUserInfo["user_info_list"];
			if (empty($user_info_list)) {
				return "所有用户已同步，无需再次同步";
			}
			//echo print_r($user_info_list);

			mysql_query('START TRANSACTION');

			$errorOpenids = "";
			$successcount = 0;
			$failcount = 0;
			foreach ($user_info_list as $userinfo) {

				/*if(($successcount + $failcount) % 5000 == 0) {
				 mysql_query('START TRANSACTION');
				 }*/

				$openid = $userinfo["openid"];
				if (!empty($openid)) {
					$nickname = $userinfo["nickname"];
					$sex = $userinfo["sex"];
					$subscribe = $userinfo["subscribe"];
					$currtime = DateUtil::getCurrentTime();
					$sql = "INSERT INTO `wx_user_info` (openid, nickname, sex, subscribe, subscribe_time)
VALUES ('$openid', '$nickname', '$sex', '$subscribe', '$currtime') ";
					$execres = $db -> exec($sql);
					if (!$execres) {
						$errorOpenids = $errorOpenids . "; " . $openid . ":" . $nickname;
						$failcount = $failcount + 1;
					} else {
						$successcount = $successcount + 1;
					}
				}

				/*if(($successcount + $failcount) % 5000 == 0) {
				 mysql_query('COMMIT');
				 }*/
			}
			if (!empty($errorOpenids)) {
				LogUtil::logs("====>同步错误用户名单：" . $errorOpenids, getLogFile("/db.log"));
			}
			// mysql_query('ROLLBACK ');
			mysql_query('COMMIT');
			return "同步完成, 成功" . $successcount . "条, 失败" . $failcount . "条;";
		}
	}
}
?>