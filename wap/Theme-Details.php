<?php
require_once 'inc.php';
$yemianid="Theme";
$smarty->assign('yemianid',$yemianid);

$id=empty($_GET["id"])?'':$_GET["id"];
$xiangqing='';
if($id!=''){
    $xiangqing=$db->fetch($db->query("select * from cn_theme where id=$id "));
}
else{
    $xiangqing=$db->fetch($db->query("select * from cn_theme order by sort asc,time desc limit 0,1"));
}
$smarty->assign('xiangqing',$xiangqing);
$smarty->display("theme-details.html");
?>