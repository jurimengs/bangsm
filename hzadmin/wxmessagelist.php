<?php
require 'inc.php';;
require_once '../weixin/globleconfig.php';
require_once("../weixin/TypeParent.php");
require_once '../weixin/DateUtil.php';
require_once("../weixin/DBUtil.php");
require_once("../includes/Pager.class.php");


if(empty($_SESSION["cn_sysadmin"])){
	die("<script>top.location.href='login.php'</script>");
}

$action = empty($_GET["action"]) ? '' : $_GET["action"];
if($action == ""){
	showlist();
} elseif ($action == "reply"){
	reply();
}

function showlist(){
	global $db;
	global $smarty;
	
	$page_size = getPageSize(); // 每页显示的条目数
	$sub_pages = getSubPages(); // 每次显示的页数
	$current_page = empty($_GET["p"]) ? "1" : $_GET["p"]; // 当前被选中的页
	
	// 消息类型: 0表示用户发送  1表示管理员回复 2表示管理员群发消息 3 自动回复  4聊天室信息
	$sql = "SELECT a.*, b.nickname, c.content as replycontent , TIMESTAMPDIFF(SECOND  ,a.createtime, date_format(now(),'%Y%m%d%h%m%s')) timeInterval
    	from wx_user_msg a 
		left join wx_user_info b
			on a.createby = b.openid 
		left join wx_user_msg c
			on a.id = c.replyid
		where a.msgtype in('0', '4', '5')
		order by createtime desc";
	$res = $db->query_page_list2($sql,$page_size,$current_page);
	$rowList=$db->fetch_all($res);
	
	// 查总记录数
	$countres = $db->query("SELECT count(1) as totalcount from wx_user_msg a where a.msgtype in('0', '4')");
	$countObj = $db->fetch($countres); // 总条目数
	$nums = $countObj["totalcount"];
	//echo $nums."=======>";
	
	$pager = new Pager($page_size , $nums , $current_page , $sub_pages, false);
	$pagerlinker = $pager -> commonPager();
	
	//echo print_r($rowList);
	$smarty->assign('pager',$pagerlinker);
	$smarty->assign('messageArray',$rowList);
	$smarty->display('sysadmin/wxmessagelist.html');
}

function reply(){
	// msgid 是回复的目标消息id 对应表 的 replyid
	$msgid = $_POST["msgid"];
	if(empty($msgid)) {
		return;
	}
	
	$content = $_POST["content"];
	if(empty($content)) {
		return;
	}
	
	$openid = $_POST["createby"];
	if(empty($openid)) {
		return;
	}
	// 回复消息要做2件事
	// 1 调微信接口
	$paramContent = array();
	$contentTemp = array("content"=>"管理员回复：\r\n".$content);
	$paramContent = array("msgtype"=>"text", "text"=>$contentTemp);
	$data = JsonUtil::getJsonStrFromArray(array_merge($paramContent, array("touser" => $openid)));
	//LogUtil::logs("queryGroupUserAndReplyMsg data ====>".$data, getLogFile("/business.log"));
	$tp = new TypeParent();
	$response = $tp -> sendMsgByService($data);
	if($response["errcode"] == 0) {
		// 回复成功
		// 2 保存回复的消息
		$msgtype = "1"; // 消息类型: 0表示用户发送  1表示管理员回复 2表示管理员群发消息 3 自动回复  4聊天室信息
		$status = "0"; // 消息状态 ：0: 消息发送成功  1: 发送中 2 发送失败, 保存成功 3 发送成功, 保存失败 4 表示这条信息是用户送的，并且已经得到回复
		$createtime = DateUtil::getCurrentTime();
		$createby = $_SESSION['cn_sysadmin']['user_id'];
		
		// 消息类型: 0表示用户发送  1表示管理员回复 2表示管理员群发消息 3 自动回复  4聊天室信息
		DBUtil::saveMsg($createby, $content, $createtime, $msgid , $msgtype, $status);
		// 原来设计是将状态改为4用来标识已回复，现在能查到回复内容，就取消这个方案了
//		$sql = "update wx_user_msg set status = '4' where id ='$msgid'";
//		DBUtil::updateMsg($sql);
	}
	
	showlist();
}

?>