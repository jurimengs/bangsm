<?php
echo md5("admin123");
$t = new test();
$t->get();
class test{
	public function get(){
		echo $this -> set();
		echo "get";
		
	}
	
	public function set(){
		return "set";
	}
}
/*

require_once('WxUtil.php');
$res = WxUtil::initMenu();
echo "errcode:".$res->errcode."\r\n";
echo "errmsg:".$res->errmsg."\r\n";

echo appid();*/


/*
require_once('globleconfig.php');
require_once('LogUtil.php');

$fileTemp = getLogFile("/wxtoken");
$lockfileTemp = getLogFile("/token_file_lock.tmp");
echo writeTokenToFile($fileTemp, $lockfileTemp, "aaaa\r\n"."<br />");
echo getWxTokenFromFile($fileTemp);

function writeTokenToFile($filename, $lockfile, $content){
	// 写之前先判断是否存在锁文件
	if(file_exists($lockfile)) {
		return "file in writing, only can read\r\n"."<br />";
		exit();
	}
	// 如果不存在锁文件，就创建一个锁
	$lockTemp = fopen($lockfile, "w");
	
	// 读取路径产生文件对象，并且创建/打开
	$temp = fopen($filename, "w") or die("Unable to open file!");
	// 写入内容
	fwrite($temp, $content);
	// 关闭文件
	fclose($temp);
	// 关闭锁文件
	fclose($lockTemp);
	// 删除锁文件
	unlink($lockfile);
	echo "write file success";
}

function getWxTokenFromFile($fileTemp){
    $handle = fopen($fileTemp, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
    //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
    $contents = fread($handle, filesize ($fileTemp));
    fclose($handle);
	return $contents;
}
*/


/*
require_once("globleconfig.php");
require_once('LogUtil.php');
require_once("JsonUtil.php");
require_once("RequestUtil.php");

getUserInfoFromWx('osp6swnBLWkDJWivjzzvg4wi_fZY');

echo "==========================<br />";
getUserInfoFromWx('osp6swrNZiWtEuTy-Gj1cBVA1l38');
function getUserInfoFromWx($openId){
	$token = "MIEWlWu5AdqeKmIitSQSjp_CdOExEx143zsewYdv2Sdej8nw_7nIFRdAU6cLpGU3WAnS4CtG8bHLiO5mbpDulobhPIqatRBx0ckCu1zmO98GPRfAIAKTV";
	$userInfoUrl = wxGetUserBaseinfo().$token."&openid=".$openId;
	$ss = RequestUtil::httpGet($userInfoUrl);
	echo JsonUtil::getJsonStrFromArray($ss);
	//RequestUtil::httpPost($userInfoUrl, "", 'post');
}

//testdb();
function testdb(){
	global $db;
	$arr = array();
	// TODO 这个$res可以缓存到文件中
	$res=$db->query("SELECT * FROM wx_group_user where groupid = '0'");
	while ($row=$db->fetch($res)) {
		$openid = $row['openid'];
		//LogUtil::logs("queryGroupUserAndReplyMsg ====>".$openid, getLogFile("/business.log"));
		echo $openid;
		echo '<br />';
	}
	
}


//isInGroup('osp6swrNZiWtEuTy-Gj1cBVA1l38');
function isInGroup($openid){
	LogUtil::logs("isInGroup  openid ====>".$openid, getLogFile("/business.log"));
	global $db;
	$userGroupObj = $db->fetch($db->query("SELECT * FROM wx_group_user where openid = '$openid'"));
	if($userGroupObj) {
		$userisin = $userGroupObj['userisin'];
		LogUtil::logs("isInGroup userisin ====>".$userisin, getLogFile("/business.log"));
		if($userisin == '0') {
			echo $userGroupObj['groupid']."----";
		}
	}
}

*/

?>