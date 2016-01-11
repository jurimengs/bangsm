<?php
require_once '../inc2.php';
$yemianid="business";
$smarty->assign('yemianid',$yemianid);
$whatid=empty($_GET["whatid"])?'':$_GET["whatid"];
$smarty->assign('whatid',$whatid);
$id=empty($_GET["whattid"])?'':$_GET["whattid"];
$whatid1=$db->fetch($db->query("select * from cn_business_type where id=$id "));
$smarty->assign('whatidname',$whatid1);
$smarty->assign('id',$id);
if($id!=''){
$where=" and type_id=$id";
}
else {
    $where='';
}
$order=" ORDER BY sort asc,time desc";
$page_size =10;
$current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
$nums = $db->query_count('cn_business',$where);
$result1 = $db->query_page_list('cn_business',$page_size,$current_page,$order,$where);
$list=array();
while ($row=$db->fetch($result1))
{
    $list[]=$row;
}
$pager = new Pager($page_size, $nums, $current_page, 8);
$link = $pager->mod4();
$smarty->assign('pager',$link);
$smarty->assign('list',$list);

$smarty->display("business-list.html");
?>