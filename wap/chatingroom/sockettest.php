<?php
require_once '../../weixin/RequestUtil.php';
require_once '../../weixin/DateUtil.php';
require_once '../../weixin/globleconfig.php';
require_once '../../weixin/LogUtil.php';
require_once '../configs/smarty.inc.php';

$smarty->assign('openid',"testssssss.....");
$smarty->display('chatingroom/chating.html');
?>