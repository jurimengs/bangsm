<?php 
require_once 'inc.php';

$info = !isset($_GET['info'])?"信息提示":$_GET['info'];
$type = !isset($_GET['type'])?"notice":$_GET['type'];
$smarty->assign('info',$info);
$smarty->assign('type',$type);

$smarty->display('sysadmin/info.html');
require_once 'footer.php';
?>