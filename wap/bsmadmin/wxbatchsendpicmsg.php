<?php
require 'inc.php';
require_once '../../weixin/globleconfig.php';
require_once '../../weixin/WxUtil.php';
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
	$pagerlinker = $pager -> mod5();
	$smarty -> assign('pager', $pagerlinker);
	$smarty -> assign('groupUserArray', $groupRes);
	$smarty -> display('sysadmin/batchsendpicmsglist.html');
}

function tonewpage() {
	//global $db;
	global $smarty;
	$smarty -> display('sysadmin/batchsendpicmsg.html');
}

function sendnewmsg() {
	// 当前php文件所在目录
	//define('DIR_ROOT', str_replace('\\', '/', dirname(__FILE__)));
	// 项目根目录
	define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);
	//define('DIR_ROOT', "/wwwroot/");
	
	$courseid = $_GET["courseid"];
	// 根据courseid查询对应的课程（推送）信息
	$querysql = "select * from cn_course where id=$courseid";
	global $db;
	global $smarty;
	$res = $db->query($querysql);
	$row=$db->fetch($res);
	
	// TODO 先保存图片素材，得到media_id， 页面提示用户，图片素材数量上限
	// 图片（image）、语音（voice）、视频（video）和缩略图（thumb）
	$meidaType = "image";
	//
	
	//获取当前文件物理路径
	$tmp_file = DIR_ROOT."/".$row["image"];
	//echo $tmp_file;
	if (file_exists($tmp_file)) {
		// 调素材管理接口上传图片，得到meidaid
		$response = WxUtil::uploadpic($meidaType, $tmp_file);
		$picmediaid = $response["media_id"];
		$title = $row["title"];
		$sourceurl = "http://bangmaisiw.w107.mc-test.com/wap/Course-Details.php?id=".$courseid;
		$content = $row["contents"];
		$digest = "";
		$showcoverpic = "1";
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
		echo $tp -> batchSendPicMsg($openidarr, $pictextMediaid);
//		$yulanopenid = "osp6swrNZiWtEuTy-Gj1cBVA1l38";
//		echo $tp -> batchSendPicMsgYulan($yulanopenid, $pictextMediaid);
	} else {
		echo "文件不存在:".$row["image"];
		return;
	}

}

?>