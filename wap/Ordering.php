<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2016/1/9
 * Time: 17:07
 * Title:定制服务
 */
require_once 'inc.php';
$yemianid="explain";
$smarty->assign('yemianid',$yemianid);


$xiangqing=$db->fetch($db->query("select * from cn_along where type_id=2 and guishu='dingzhi' limit 1"));
$smarty->assign('xiangqing',$xiangqing);
$smarty->display("ordering.html");



?>