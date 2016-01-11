<?php

$RunTime->stop();//计时结束

$smarty->assign('runtime',$RunTime->spent());
$smarty->display('sysadmin/footer.tpl');
?>