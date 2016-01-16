<?php
require_once 'inc.php';
$yemianid="News";
$smarty->assign('yemianid',$yemianid);
//往期时间计算 往期3个月
$date=date("Y-m-d",time()-(60*60*24)*30*3);
$time=time()-(60*60*24)*30*3;
$smarty->assign('date',$date);
$tid=empty($_GET['tid'])?'':$_GET['tid'];
$search=empty($_POST['search'])?'':$_POST['search'];
$smarty->assign('tid',$tid);
$smarty->assign('search',$search);
$where=' and view=1';
if($search==''){
    if($tid!='')
    {
        $where.=" and time>$time and type_id=$tid";
    }
    else{
        $where.=" and time>$time and type_id=1";
    }
}
else{
    $where.=" and (title like '%$search%' or description like '%$search%' or keywords like '%$search%' or contents like '%$search%')";
}

$order=" ORDER BY sort asc,time desc";
$page_size =999999999999;
$current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
$nums = $db->query_count('cn_news',$where);
$result1 = $db->query_page_list('cn_news',$page_size,$current_page,$order,$where);
$list=array();
while ($row=$db->fetch($result1))
{
    $list[]=$row;
}
$pager = new Pager($page_size, $nums, $current_page, 8);
$link = $pager->mod4();
$smarty->assign('pager',$link);
$smarty->assign('list',$list);



$smarty->display("news-list.html");
?>