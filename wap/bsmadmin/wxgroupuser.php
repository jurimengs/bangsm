<?php
require 'inc.php';
require_once '../../weixin/globleconfig.php';
require_once '../../weixin/WxUtil.php';
require_once '../../weixin/DateUtil.php';
require_once '../../weixin/RequestUtil.php';
require_once '../../weixin/LogUtil.php';
require_once '../../weixin/StringUtil.php';
require_once("../includes/Pager.class.php");

if(empty($_SESSION["cn_sysadmin"])){
	die("<script>top.location.href='login.php'</script>");
}

$action = empty($_GET["action"]) ? '' : $_GET["action"];
if($action == ""){
	showlist();
} elseif ($action == "toaddpage"){
	toaddpage();
} elseif ($action == "addone"){
	addone();
} elseif ($action == "deleteselected"){
	deleteselected();
} elseif ($action == "groupusermanage"){
	groupusermanage();
} elseif ($action == "deletefromgroup"){
	deletefromgroup();
} elseif ($action == "addtogroup"){
	addtogroup();
} elseif ($action == "initUser"){
	echo initUser();
}

function showlist(){
	global $db;
	global $smarty;
	
	$page_size = getPageSize(); // 每页显示的条目数
	$sub_pages = getSubPages(); // 每次显示的页数
	$current_page = empty($_GET["p"]) ? "1" : $_GET["p"]; // 当前被选中的页
	
	/*$res = $db->query("SELECT a.id, a.groupname FROM wx_group_info a");
	$rowList=$db->fetch_all($res);*/
	
	// 组分页查询
	$groupsql = "SELECT a.id, a.groupname FROM wx_group_info a";
	$res = $db->query_page_list2($groupsql,$page_size,$current_page);
	$rowList=$db->fetch_all($res);
	
	// 查总记录数
	$countres = $db->query("SELECT count(1) as totalcount from wx_group_info a");
	$countObj = $db->fetch($countres); 
	// 总条目数
	$nums = $countObj["totalcount"];
	
	// 拿到当前页组的id
	$groupids = "";
	foreach($rowList as $row){
		$groupids = $groupids.$row["id"].",";
	}
	$in = StringUtil::sublaststr($groupids);
	
	$userlistsql = "SELECT a.openid , a.groupid , b.nickname, b.localnickname, b.backup
			FROM wx_group_user a 
			left join wx_user_info b 
			on a.openid = b.openid 
			where b.openid is not null
			and a.groupid in ($in)";
	//echo $userlistsql;
	
	$groupUserList = $db->fetch_all($db->query($userlistsql));
	//var_dump($groupUserList);
	$groupRes = array();
	foreach($rowList as $row){
		$groupid = $row["id"];
		$groupname = $row["groupname"];
		
		$userlistTemp = array();
		foreach($groupUserList as $groupUser){
			if($groupUser["groupid"] == $groupid) {
				// TODO 可以考虑移除已归纳过的元素
				$nicknametemp = $groupUser["nickname"];
				$groupUser["nickname"] = base64_decode($nicknametemp);
				$userlistTemp[] = $groupUser;
			}
		}
		
		$groupRes[] = array('groupid'=>$groupid, 'groupname'=>$groupname, 'userList'=>$userlistTemp);
	}
	//echo print_r($groupRes);
	
	$pager = new Pager($page_size , $nums , $current_page , $sub_pages, false);
	$pagerlinker = $pager -> mod5();
	$smarty->assign('pager',$pagerlinker);
	
	$smarty->assign('groupUserArray',$groupRes);
	$smarty->display('sysadmin/wxgroupuser.html');
}

function toaddpage(){
	global $db;
	global $smarty;
	$res=$db->query("SELECT * from wx_user_info");
	$rowList=$db->fetch_all($res);
	$smarty->assign('allUserArray',$rowList);
	$smarty->display('sysadmin/addgroupuser.html');
}


function addone(){
	global $db;
	$groupid = empty($_POST["groupid"]) ? '' : $_POST["groupid"];
	$openid = empty($_POST["openid"]) ? '' : $_POST["openid"];
	$groupname = empty($_POST["groupname"]) ? '' : $_POST["groupname"];
	$createtime = DateUtil::getCurrentTime();
	$createby = $_SESSION['cn_sysadmin']['user_id'];
	$userisin = "1";
	
	if($groupname != "" && $openid != "") {
		$backup = empty($_POST["backup"]) ? '' : $_POST["backup"];
		$sql = "insert into wx_group_user (groupid, openid, groupname, createtime, createby, userisin) values 
		('$groupid', '$openid', '$groupname', '$createtime', '$createby', '$userisin')";
		$db->exec($sql);
	}
	// 添加后，重新再查一遍
	showlist();
}

function deleteselected(){
	$groupuserids = $_POST["groupuserids"];
	$inTemp = "";
	foreach($groupuserids as $groupuserid){
		$inTemp = $inTemp.$groupuserid.",";
	}
	
	$in = substr($inTemp, 0, strlen($inTemp) -1);
	if($in != "") {
		global $db;
		$sql = "delete from wx_group_user where id in (".$in.")";
		//echo "===>sql".$sql;
		$db->exec($sql);
		// 删除后，重新再查一遍
		showlist();
	}
}

function groupusermanage(){
	$groupid = $_GET["groupid"];
	if(empty($groupid)) {
		return;
	}
	
	global $db;
	global $smarty;
	// 先查本组员
	$userlistsql = "SELECT a.openid , a.groupid , b.nickname, b.localnickname, b.backup FROM wx_group_user a 
			left join wx_user_info b 
			on a.openid = b.openid 
			where b.openid is not null and a.groupid ='$groupid'";
	$groupUserListTemp = $db->fetch_all($db->query($userlistsql));
	$groupUserList = array();
	foreach($groupUserListTemp as $groupUser){
		$nicknametemp = $groupUser["nickname"];
		$groupUser["nickname"] = base64_decode($nicknametemp);
		$groupUserList[] = $groupUser;
	}
	
	
	$page_size = getPageSize(); // 每页显示的条目数
	$sub_pages = getSubPages(); // 每次显示的页数
	$current_page = empty($_GET["p"]) ? "1" : $_GET["p"]; // 当前被选中的页
	
	// 再查所有不在本组的微信用户
	$otherusersql = "select * from wx_user_info where openid not in 
					(select openid from wx_group_user where groupid = '$groupid')";
	//$otheruserlist = $db->fetch_all($db->query($otherusersql));
	
	$res = $db->query_page_list2($otherusersql,$page_size,$current_page);
	$otheruserlist=$db->fetch_all($res);
	
	$countres = $db->query("SELECT count(1) as totalcount from wx_user_info where openid not in 
					(select openid from wx_group_user where groupid = '$groupid')");
	$countObj = $db->fetch($countres); // 总条目数
	$nums = $countObj["totalcount"];
	
	$pager = new Pager($page_size , $nums , $current_page , $sub_pages, false);
	$pagerlinker = $pager -> mod5();
	
	$smarty->assign('pager',$pagerlinker);
	
	// 本组已有的用户列表
	$smarty->assign('groupUserList',$groupUserList);
	// 所有用户列表
	$smarty->assign('otheruserlist',$otheruserlist);
	// 目标组id
	$smarty->assign('groupid',$groupid);
	$smarty->display('sysadmin/wxgroupusermanage.html');
}

function deletefromgroup(){
	$groupid = $_POST["groupid"];
	$openids = $_POST["openid"];
	//echo print_r($groupid);
	//echo print_r($openids);
	
	$inTemp = "";
	foreach($openids as $openid){
		$inTemp = $inTemp."'".$openid."',";
	}
	
	$in = substr($inTemp, 0, strlen($inTemp) -1);
	if($in != "") {
		global $db;
		$sql = "delete from wx_group_user where openid in (".$in.")";
		//echo $sql;
		//echo "===>sql".$sql;
		$db->exec($sql);
		// 删除后，重新再查一遍
		showlist();
	}
}

function addtogroup(){
	$groupid = $_POST["groupid"];
	$openids = $_POST["openid"];
	
	global $db;
	$groupInfo = $db->fetch($db->query("select groupname from wx_group_info where id ='$groupid' "));
	//var_dump($groupInfo);
	$groupname = $groupInfo["groupname"];
	
	$createtime = DateUtil::getCurrentTime();
	$createby = $_SESSION['cn_sysadmin']['user_id'];
	$userisin = "1";
	
	// 先判断是有否存在的记录
	$inTemp = "";
	foreach($openids as $openid){
		$inTemp = $inTemp."'".$openid."',";
	}
	
	$in = substr($inTemp, 0, strlen($inTemp) -1);
	
	// 先删除openid
	$db->exec("delete from wx_group_user where openid in (".$in.") ");
	
	foreach($openids as $openid){
		$sql = "insert into wx_group_user (groupid, openid, groupname, createtime, createby, userisin) values (
		'$groupid', '$openid', '$groupname', '$createtime', '$createby', '$userisin'
		)";
		$db->exec($sql);
	}
	// 重新再查一遍
	showlist();
}

function initUser(){
	$remoteTemp = WxUtil::getUserList();
	//echo print_r($remoteTemp);
	
	if(!empty ($remoteTemp)) {
		$remoteUsers = $remoteTemp["data"];
		if(!empty($remoteUsers)) {
			
			global $db;
			$res = $db->query("SELECT openid FROM wx_user_info ");
			$rowList=$db->fetch_all($res);
			
			$user_info_list = array();
			// 每次最多查询100个用户
			$itemp = 0;
			$remoteOpenidArray = $remoteUsers["openid"];
			
			$openidArray = array();
			// 先过滤一遍
			foreach($remoteOpenidArray as $openid) {
				if(!in_array(array("openid"=>$openid), $rowList)){
					// 只取openid不在数据库中的
					$openidArray[] = $openid;
				}
			}
			
			LogUtil::logs("微信总用户数: ====> ".count($openidArray), getLogFile("/business.log"));
			$saveTimes = 1;
			foreach($openidArray as $openid) {
				if(!in_array(array("openid"=>$openid), $rowList)){
					//echo $openid." is not in<br />";
					// 组装一个信息
					if(($itemp % 100) == 0) {
						$user_to_query = array();
					}
					
					$toqueryuser = array("openid"=>$openid, "lang" => "zh-CN");
					$user_to_query[] = $toqueryuser;
					//LogUtil::logs("itemp====> ".$itemp, getLogFile("/business.log"));
					if(count($user_to_query) == 100 || $itemp == (count($openidArray) -1)) {
						// 每满100条，查询一次
						LogUtil::logs("====> 第".$saveTimes."次发起微信查询", getLogFile("/business.log"));
						$pdata = JsonUtil::getJsonStrFromArray(array("user_list"=>$user_to_query));
						$batchUserInfo = WxUtil::getBatchUserInfo($pdata);
						
						if(empty($batchUserInfo)) {
							// 先检查是否存在特殊字符
							
						}
						if(!empty($batchUserInfo)) {
							$user_info_list = $batchUserInfo["user_info_list"];
							transactionSave($user_info_list);
						
							$countres = $db->query("SELECT count(1) as totalcount from wx_user_info a");
							$countObj = $db->fetch($countres); 
							$nums = $countObj["totalcount"];
							LogUtil::logs("已保存用户数 ====> ".$nums, getLogFile("/business.log"));
						} else {
							LogUtil::logs("====> 第".$saveTimes."次发起微信查询出错", getLogFile("/business.log"));
							LogUtil::logs("查询的用户openid请求参数====> ".$pdata, getLogFile("/business.log"));
							LogUtil::logs("查询的用户openid结果====>".JsonUtil::getJsonStrFromArray($batchUserInfo), getLogFile("/business.log"));
						}
						
						$saveTimes ++;
					}
					$itemp ++;
				}
			}
			
			return "同步完成";
		}
	}
}


function transactionSave($user_info_list){
	$errorOpenids = "";
	$successcount = 0;
	$failcount = 0;
			
	LogUtil::logs("要保存到数据库的用户信息数量====> ".count($user_info_list), getLogFile("/business.log"));
			//echo print_r($user_info_list);
	global $db;
	if(!empty($user_info_list)) {
		mysql_query('START TRANSACTION');
		foreach($user_info_list as $userinfo){
			
			/*if(($successcount + $failcount) % 5000 == 0) {
				mysql_query('START TRANSACTION');
			}*/
			
			$openid = $userinfo["openid"];
			if(!empty($openid)) {
				//echo print_r($userinfo);
				$nickname = base64_encode($userinfo["nickname"]);
				//$nickname = $userinfo["nickname"];
				// 默认是/0 表示640*640的尺寸    有0、46、64、96、132
				$headimgurl = $userinfo["headimgurl"];
				$sex = $userinfo["sex"];
				$subscribe = $userinfo["subscribe"];
				$currtime = DateUtil::getCurrentTime();
				$sql = "INSERT INTO `wx_user_info` (openid, nickname, sex, subscribe, subscribe_time, headimgurl) 
					VALUES ('$openid', '$nickname', '$sex', '$subscribe', '$currtime', '$headimgurl')";
				$execres = $db -> exec($sql);
				if(!$execres) {
					$errorOpenids .= $openid."; ";
					$failcount = $failcount + 1;
				} else {
					$successcount = $successcount +1;
				}
			}
			
			/*if(($successcount + $failcount) % 5000 == 0) {
				mysql_query('COMMIT');
			}*/
		}

		// mysql_query('ROLLBACK ');
		mysql_query('COMMIT');
		if(!empty($errorOpenids)) {
			LogUtil::logs("====>同步错误用户名单：".$errorOpenids, getLogFile("/db.log"));
		}
		
		LogUtil::logs("事务提交：成功".$successcount."条，失败".$failcount."条", getLogFile("/business.log"));
	}
}

?>