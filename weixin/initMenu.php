<?php
require_once("globleconfig.php");
require_once("../configs/db.inc.php");

function init(){
	$url = wxCreateBottommenuUrl().getWxTokenFromDB();
	$menustr = '{
	    "button": [
	        {
	            "name": "大家说",
	            "sub_button": [
	                {
	                    "type": "click",
	                    "name": "进入聊天室",
	                    "key": "enterChatingroom"
	                },
	                {
	                    "type": "click",
	                    "name": "退出聊天室",
	                    "key": "exitChatingroom"
	                }
	            ]
	        },
	        {
	            "name": "关于我们",
	            "sub_button": [
	                {
	                    "type": "view",
	                    "name": "联系我们",
	                    "url": "http://www.alsovalue.com/contactus.php"
	                }
	            ]
	        },
	        {
	            "type": "view",
	            "name": "案例中心",
	            "url": "http://www.alsovalue.com/case.php"
	        }
	    ]
	}';
}

/**
 * get token from db
 */
function getWxTokenFromDB(){
	global $db;
	$tokenObj = $db->fetch($db->query("SELECT * FROM wx_token where id = 1"));
	
	if($tokenObj) {
		// 如果不为空
		$tokenFromDB = $tokenObj['token'];
		
		$updatetime = $tokenObj['updatetime'];
		$currenttime = DateUtil::getCurrentTime();
		$days=floor((strtotime($currenttime)-strtotime($updatetime))/86400);
		$hour=floor((strtotime($currenttime)-strtotime($updatetime))%86400/3600);
		$minute=floor((strtotime($currenttime)-strtotime($updatetime))%86400/60);
		$second=floor((strtotime($currenttime)-strtotime($updatetime))%86400%60);
		
		$seconds = $days * 24 + $hour * 60 + $minute * 60 + $second;
		LogUtil::logs("getWxTokenFromDB  ====> ".$updatetime." == >".$seconds, getLogFile('/business.log'));
		if($seconds >= 6000) {
			// 如果当前操作时间的间隔已经大于或等于6500秒了
			LogUtil::logs("getWxTokenFromDB  ：已超时，重新获取token", getLogFile('/business.log'));
			return initWxTokenToDB();
		}
		LogUtil::logs("getWxTokenFromDB  ：未超时，使用数据库token", getLogFile('/business.log'));
		return $tokenFromDB;
	}
	LogUtil::logs("getWxTokenFromDB  ：数据库不存在token，初始化token", getLogFile('/business.log'));
	return initWxTokenToDB();
}

/**
 * save token to db
 */
function initWxTokenToDB(){
	global $db;
	$url = wxTokenUrl()."&appid=".appid()."&secret=".secret();
	// 请求微信token
	LogUtil::logs("initWxTokenToDB tokenurl====>".$url, getLogFile('/business.log'));
	$arr =  RequestUtil::httpGet($url);
	$newToken = $arr['access_token'];
	LogUtil::logs("initWxTokenToDB newToken====>".$newToken, getLogFile('/business.log'));
	
	// 请求微信ticket
	$newTicket = initTicket($newToken);
	
	$updatetime = DateUtil::getCurrentTime();
	
	
	// 加锁文件
	if(file_exists($lockfile)) {
		LogUtil::logs("initWxTokenToDB ====> file in writing, only can read\r\n", getLogFile('/business.log'));
		exit();
	}
	
	// save or update;
	$db->exec("INSERT INTO wx_token(id, token, updatetime, ticket) 
	values(1, '$newToken','$updatetime','$newTicket') 
	ON DUPLICATE KEY UPDATE token='$newToken', updatetime='$updatetime', ticket='$newTicket'" );
	
	// 关闭锁文件
	fclose($lockTemp);
	// 删除锁文件
	unlink($lockfile);
	return $newToken;
}

function initTicket($newToken){
	$type = typeForTicket();
	$ticketUrl = wxTicketUrl()."?access_token=".$newToken."&type=".$type;
	LogUtil::logs("wxindex.php initTicket url======>".$ticketUrl, getLogFile('/business.log'));
	
	$returnArr = RequestUtil::httpGet($ticketUrl);
	LogUtil::logs("wxindex.php initTicket returnJsonStr======>".$returnArr, getLogFile('/business.log'));
	
	if(0 == $returnArr["errcode"]){
		return $returnArr["ticket"]; 
	}
	return null;
}
?>