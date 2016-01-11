<?php

require_once '../weixin/globleconfig.php';
require_once '../weixin/WxUtil.php';
require_once '../weixin/DateUtil.php';
require_once '../weixin/RequestUtil.php';

echo print_r(getUserList());

function getUserList() {
	$remoteUrl = wxGetUseridList().WxUtil::getWxTokenFromDB();
	$userList = RequestUtil::httpPost($remoteUrl, $data, 'post');
	return $userList;
}

?>