<?php
require 'inc.php';
require_once '../../weixin/DateUtil.php';
require_once '../../weixin/globleconfig.php';
require_once("../includes/Pager.class.php");

if(empty($_SESSION["cn_sysadmin"])){
	die("<script>top.location.href='login.php'</script>");
}

$action = empty($_GET["action"]) ? '' : $_GET["action"];
if($action == ""){
	showlist();
} elseif ($action == "toaddpage"){
	$smarty->display('sysadmin/addgroup.html');
} elseif ($action == "addone"){
	addone();
} elseif ($action == "deleteselected"){
	deleteselected();
}

function showlist(){
	global $db;
	global $smarty;
	
	
	$page_size = getPageSize(); // 每页显示的条目数
	$sub_pages = getSubPages(); // 每次显示的页数
	$current_page = empty($_GET["p"]) ? "1" : $_GET["p"]; // 当前被选中的页
	
	$sql = "SELECT * FROM wx_group_info";
	$res = $db->query_page_list2($sql,$page_size,$current_page);
	$rowList=$db->fetch_all($res);
	
	// 查总记录数
	$countres = $db->query("SELECT count(1) as totalcount from wx_group_info");
	$countObj = $db->fetch($countres); // 总条目数
	$nums = $countObj["totalcount"];
	
	$pager = new Pager($page_size , $nums , $current_page , $sub_pages, false);
	$pagerlinker = $pager -> mod5();
	
	$smarty->assign('pager',$pagerlinker);
	$smarty->assign('groupArray',$rowList);
	$smarty->display('sysadmin/wxgroup.html');
}

function addone(){
//	$_SESSION['cn_sysadmin']['user_id'] = $user_id;
//	$_SESSION['cn_sysadmin']['role_name'] = $role['name'];
//	$_SESSION['cn_sysadmin']['role_id'] = $role['id'];
	global $db;
	$createby = $_SESSION['cn_sysadmin']['user_id'];
	$createtime = DateUtil::getCurrentTime();
	$groupname = empty($_POST["groupname"]) ? '' : $_POST["groupname"];
	if($groupname != "") {
		$backup = empty($_POST["backup"]) ? '' : $_POST["backup"];
		$sql = "insert into wx_group_info (createby, createtime, groupname, backup) values ('$createby', '$createtime', '$groupname', '$backup')";
		$db->exec($sql);
	}
	// 添加后，重新再查一遍
	showlist();
}

function deleteselected(){
	$groupids = $_POST["groupids"];
	$inTemp = "";
	foreach($groupids as $groupid){
		$inTemp = $inTemp.$groupid.",";
	}
	
	$in = substr($inTemp, 0, strlen($inTemp) -1);
	if($inTemp != "") {
		global $db;
		$sql = "delete from wx_group_info where id in (".$in.")";
		//echo "===>sql".$sql;
		$db->exec($sql);
		$sql = "update wx_group_user set groupid=null, userisin='1' where groupid in (".$in.")";
		$db->exec($sql);
		// 删除后，重新再查一遍
		showlist();
	}
}

?>