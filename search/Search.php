<?php
require_once '../inc2.php';
$yemianid="search";
$smarty->assign('yemianid',$yemianid);
$yemianid2="search";
$smarty->assign('yemianid2',$yemianid2);



$search = empty($_GET["search"])?'':$_GET["search"];
$page_size=6;
$current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
$where='';
if($search!=''){
    $where=" and (title like '%$search%' or description like '%$search%' or keywords like '%$search%' or contents like '%$search%')";
}
$search2="<strong style='color:#3450C9;'>$search</strong>";
$smarty->assign('search2',$search2);
$smarty->assign('search',$search);
$sql1="select id,title,image,type_id,'culture' as type,description from cn_culture where 1=1 $where UNION all select id,title,image,type_id,'news' as type,description from cn_news where 1=1 $where UNION all select id,title,image,type_id,'building' as type,description from cn_building where 1=1 $where UNION all select id,title,image,type_id,'business' as type,description from cn_business where 1=1 $where UNION all select id,title,image,type_id,'safety' as type,description from cn_safety where 1=1 $where UNION all select id,title,image,type_id,'staff' as type,description from cn_staff where 1=1 $where";
//$a="cn_culture,cn_news,cn_building,cn_business,cn_safety,cn_staff"
$list=array();
$result1 = $db->query_page_list2($sql1,$page_size,$current_page);
while($row=$db->fetch($result1)){
    $list[]=$row;
}

$smarty->assign('list',$list);
//print_r($list);
$result=$db->query("select count(*) from cn_culture where 1=1 $where UNION all select count(*) from cn_news where 1=1 $where UNION all select count(*) from cn_building where 1=1 $where UNION all select count(*) from cn_business where 1=1 $where UNION all select count(*) from cn_safety where 1=1 $where UNION all select count(*) from cn_staff where 1=1 $where");
$nums=0;
while($row=$db->fetch($result)){
    $nums=$nums+$row['count(*)'];
}
$pager = new Pager($page_size, $nums, $current_page, 8);
$link = $pager->mod4();
$smarty->assign('pager',$link);
//print_r($list);
$smarty->display("search.html");
?>