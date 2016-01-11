<?php
require_once 'inc.php';
$table='cn_joininfo';

$action = empty($_GET["action"])?'':$_GET["action"];

if($action == 'delete'){
	$id = $_POST['id'];
	$isbool = 0;
	if(!empty($id))
	{

			for ($i = 0; $i < count($id); $i++) {
				$isbool = $db->delete($table, "id=".$id[$i]);	
			}
			if($isbool!==false){
				success_msg('删除成功','?');
			}else{
				error_msg('删除失败','back');
			}
		
	}
}
if($action == 'bj'){
	
	$id=$_GET['id'];
	$result = $db->query_by_id($table,$id);
	$row=$db->fetch($result);
	if(!$row){
		info_sysadmin_error('没有找到相关信息');
	}
	$smarty->assign('admin',$row);
}
if($action == 'edit'){
	success_msg('修改成功','?');
}

if($action == ''){
		$where= @$_GET['keyword']!=''?" AND (`uname` LIKE '%".$_GET['keyword']."%' OR `user_id` LIKE '%".$_GET['keyword']."%')":'';
		$order=' ORDER BY id DESC';
		$where='';
		$page_size = 20;
		$current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
		$nums = $db->query_count($table,$where);
		$result = $db->query_page_list($table,$page_size,$current_page,$order,$where);
		$adminList=array();
		while($row=$db->fetch($result))
		{
			$adminList[]=$row;
		}
		$pager = new Pager($page_size, $nums, $current_page, 8);
		$link = $pager->mod2();
		
		$smarty->assign('pager',$link);
		$smarty->assign('adminList',$adminList);

}
$smarty->assign("action",$action);
$smarty->assign("keyword",@$_GET["keyword"]);

$smarty->display('sysadmin/joininfo.html');

require_once 'footer.php';
?>