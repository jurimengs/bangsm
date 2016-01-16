<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/wap/includes/DB.class.php");
$db_host		="101.226.179.217";
$db_user = "sq_bangmaisiw";
$db_pwd = "bangmaisiw1203";
$db_name		="sq_bangmaisiw";
$db_charset		="utf8";

$db = new DB('mysql', $db_host, $db_user, $db_pwd, $db_name, $db_charset,false);
$GLOBALS['db'];
?>