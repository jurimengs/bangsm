<?php
require_once '../inc2.php';
$yemianid="business";
$smarty->assign('yemianid',$yemianid);

$whatid=empty($_GET["whatid"])?'':$_GET["whatid"];
$smarty->assign('whatid',$whatid);
$id='';
$smarty->assign('id',$id);


$smarty->display("business.html");
?>