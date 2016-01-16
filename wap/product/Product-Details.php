<?php
require_once '../inc2.php';
$yemianid="product";
$smarty->assign('yemianid',$yemianid);

$id=empty($_GET["id"])?'':$_GET["id"];
$xiangqing='';
if($id!=''){
    $xiangqing=$db->fetch($db->query("select * from cn_product where id=$id "));
}
else{
    $xiangqing=$db->fetch($db->query("select * from cn_product order by sort asc,time desc limit 0,1"));
}
$smarty->assign('xiangqing',$xiangqing);
$smarty->display("product-details.html");
?>