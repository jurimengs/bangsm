<?php
require_once '../inc2.php';
$yemianid="business";
$smarty->assign('yemianid',$yemianid);

$whatid=empty($_GET["whatid"])?'':$_GET["whatid"];
$smarty->assign('id',$whatid);
$smarty->assign('id2',$whatid);
$whatid1=$db->fetch($db->query("select * from cn_business_type where id=$whatid "));
$smarty->assign('whatid',$whatid1["parent_id"]);
$smarty->assign('type_name',$whatid1);

$right=alla2("cn_business", " and type_id=$whatid", " order by sort asc,time desc", "id,title,image,type_id");
$smarty->assign('right',$right);

$id=empty($_GET["whattid"])?'':$_GET["whattid"];
if($id!=''){
    $xiangqing=$db->fetch($db->query("select * from cn_business where id=$id "));
}
else{
    $xiangqing=$db->fetch($db->query("select * from cn_business order by sort asc,time desc limit 0,1"));
}
$smarty->assign('xiangqing',$xiangqing);

$xiangqingshang='';
$results=$db->query("select * from cn_business where time>{$xiangqing['time']} order by time asc,sort asc limit 0,1");
$resultss=$db->fetch($results);
if($resultss['id']!='')
{
    $xiangqingshang='<a href="/business/business-xq.php?whattid='.$resultss['id'].'&whatid='.$resultss['type_id'].'" >'.$resultss['title'].'</a>';
}
else
{
    $xiangqingshang="暂无";
}
$smarty->assign('xiangqingshang',$xiangqingshang);
//下一篇
$xiangqingxia='';
$resultx=$db->query("select * from cn_business where  time<{$xiangqing['time']} order by time desc,sort desc limit 0,1");
$resultxx=$db->fetch($resultx);
if($resultxx['id']!='')
{
    $xiangqingxia='<a href="/business/business-xq.php?whattid='.$resultxx['id'].'&whatid='.$resultss['type_id'].'" >'.$resultxx['title'].'</a>';
}
else
{
    $xiangqingxia="暂无";
}
$smarty->assign('xiangqingxia',$xiangqingxia);

$smarty->display("business-xq.html");
?>