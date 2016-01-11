<?php
require_once 'inc.php';

if(empty($_SESSION["cn_sysadmin"])){
	die("<script>top.location.href='login.php'</script>");
}

$smarty->assign('role_name',$_SESSION["cn_sysadmin"]['role_name']);
$smarty->assign('user_id',$_SESSION["cn_sysadmin"]['user_id']);
$smarty->display('sysadmin/top.html');
?>