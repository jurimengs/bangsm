<?php
require_once 'inc.php';
$yemianid="Course";
$smarty->assign('yemianid',$yemianid);

$id=empty($_GET["id"])?'':$_GET["id"];
$xiangqing='';
if($id!=''){
    $xiangqing=$db->fetch($db->query("select * from cn_course where id=$id "));
}
else{
    $xiangqing=$db->fetch($db->query("select * from cn_course order by sort asc,time desc limit 0,1"));
}
$smarty->assign('xiangqing',$xiangqing);
$smarty->display("course-details.html");
?>