<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/includes/DB.class.php");
$db_host		="";
$db_user = "";
$db_pwd = "";
$db_name		="";
$db_charset		="utf8";

$db = new DB('mysql', $db_host, $db_user, $db_pwd, $db_name, $db_charset,false);
$GLOBALS['db'];
?>