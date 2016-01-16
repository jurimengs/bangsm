<?php
require_once 'inc.php';

$table='cn_login_log';

$action = empty($_GET["action"])?'':$_GET["action"];
if($action == "delete"){
		$id = $_POST['id'];
		$isbool = true;
		if(!empty($id))
		{	
			for ($i = 0; $i < count($id); $i++) {
				$isbool = $db->delete($table, "id=".$id[$i]);
			}
			
			if($isbool!==false){
				success_msg('删除成功',prev_url());
			}else{
				error_msg('删除失败','back');
			}
		}
	
}
if($action == ''){
		$where= @$_GET['keyword']!=''?" AND userId LIKE '%".@$_GET['keyword']."%'":'';
		$order=' ORDER BY id DESC';
		
		$page_size = 20;
		$current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
		$nums = $db->query_count($table,$where);
		$logList = array();
		$result = $db->query_page_list($table,$page_size,$current_page,$order,$where);
		while ($row=$db->fetch($result)) {
			$logList[] = $row;
		}
		
		$pager = new Pager($page_size, $nums, $current_page, 8);
		$link = $pager->mod5();
		
		$smarty->assign('pager',$link);
		$smarty->assign('logList',$logList);
		
}
$smarty->assign("action",$action);
$smarty->assign("keyword",@$_GET["keyword"]);
$smarty->display("sysadmin/login_log.html");
require_once 'footer.php';
?>