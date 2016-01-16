<?php
require_once 'inc.php';
$yemianid="News";
$smarty->assign('yemianid',$yemianid);





$smarty->display("news.html");
?>