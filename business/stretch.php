<?php
require_once '../inc2.php';
$yemianid="business";
$smarty->assign('yemianid',$yemianid);
$yemianid2="yanshen";
$smarty->assign('yemianid2',$yemianid2);

$whatid=empty($_GET["whatid"])?'':$_GET["whatid"];
$smarty->assign('whatid',$whatid);

$id=empty($_GET["whattid"])?'':$_GET["whattid"];
$smarty->assign('id',$id);
$whatid1=$db->fetch($db->query("select * from cn_business_type where id=$id "));
$smarty->assign('type_name',$whatid1);
$xiangqing='';
if($id!=''){
    $xiangqing=$db->fetch($db->query("select * from cn_business where type_id=$id "));
}
else {
    $xiangqing=$db->fetch($db->query("select * from cn_business order by sort asc,time desc limit 0,1"));
}
$smarty->assign('xiangqing',$xiangqing);

$smarty->display("stretch.html");
?>