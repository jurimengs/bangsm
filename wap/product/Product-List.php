<?php
require_once '../inc2.php';
$yemianid="product";
$smarty->assign('yemianid',$yemianid);


$tid=empty($_GET['tid'])?'':$_GET['tid'];
$smarty->assign('tid',$tid);

$where='';
if($tid!='')
{
    $where=" and type_id=$tid";
}
else{
    $where=" and type_id=10";
}

$order=" ORDER BY sort asc,time desc";
$page_size =4;
$current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
$nums = $db->query_count('cn_product',$where);
$result1 = $db->query_page_list('cn_product',$page_size,$current_page,$order,$where);
$list=array();
while ($row=$db->fetch($result1))
{
    $list[]=$row;
}
$pager = new Pager($page_size, $nums, $current_page, 8);
$link = $pager->mod4();
$smarty->assign('pager',$link);
$smarty->assign('list',$list);


$prod2=alla("cn_product_type"," and parent_id!=0"," order by sort asc");
$smarty->assign('prod2',$prod2);

$smarty->display("product-list.html");
?>