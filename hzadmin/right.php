<?php
require 'inc.php';

//foreach($_SERVER as $key=>$value){
	//print($key.' = '.$value).'<br>';
//}


$sys_info['os'] = PHP_OS;
$sys_info['ip'] = $_SERVER['SERVER_ADDR'];
$sys_info['web_server']=$_SERVER['SERVER_SOFTWARE'];
$sys_info['php_ver']       = PHP_VERSION;

/* 允许上传的最大文件大小 */
$sys_info['max_filesize'] = ini_get('upload_max_filesize');
$sys_info['port']     = $_SERVER['SERVER_PORT'];

$smarty->assign('sys_info',$sys_info);
$smarty->display('sysadmin/right.html');
require_once 'footer.php';
?>