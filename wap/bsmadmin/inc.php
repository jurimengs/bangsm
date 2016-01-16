<?php
session_start();
header("Cache-control: private");
header("Content-Type: text/html; charset=utf-8");

if(empty($_SESSION["cn_sysadmin"])){
	die("<script>top.location.href='login.php'</script>");
}
require_once '../includes/RunTime.class.php';
require_once '../configs/db.inc.php';
require_once '../configs/smarty.inc.php';
require_once '../includes/Pager.class.php';
require_once '../includes/utils.func.php';
require_once '../includes/init.php';

$smarty->caching=false;
$RunTime= new RunTime();
$RunTime->start();
?>