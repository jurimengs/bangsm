<?php
require_once 'inc.php';
$table='cn_liuyan';

$action = empty($_GET["action"])?'':$_GET["action"];
$zhongxineamil=$db->fetch($db->query('select * from cn_qqemail where id=1'));
$zxemail=$zhongxineamil['email'];

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
	$smarty->assign('image',$row);
	//$db->exec("update cn_liuyan set state =1 where id=$id");
	//$zixunshi=$row['zixunshi'];
	//$zi=$db->fetch($db->query("select * from cn_project where title='$zixunshi'"));
	//$smarty->assign('zi',$zi);邮箱用
}
if($action == 'edit'){
		/*$id=$_POST['id'];
		$zemail=$_POST['zemail'];
		$yemail=$_POST['yemail'];
		$yuanyin=$_POST['yuanyin'];
		$zhuangtai=$_POST['zhuangtai'];
		$fuweishijian=$_POST['fuweishijian'];
		$result=$db->query_by_id('cn_mail', 1);
		$mailInfo = $db->fetch($result);
		
		$user=$db->fetch($db->query("select * from cn_yuyue where id=$id"));
		*/
	   
}

if($action == ''){
	if($_GET['keyword']!='根据用户名或者标题搜索'){
		$where= @$_GET['keyword']!=''?" AND (`title` LIKE '%".$_GET['keyword']."%' OR `surname` LIKE '%".$_GET['keyword']."%')":'';
	}
	    $order=' ORDER BY time DESC';
		//$where=$where.' AND zhuangtai=3';
		
		/*
		if($_GET['kaishi']!='')
		{
			$where=$where." and time>'".$_GET['kaishi']."'";
		}
		
		if($_GET['jieshu']!='')
		{
			$where=$where." and time<'".$_GET['jieshu']."'";
		}*/
		
		$page_size = 20;
		$current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
		$nums = $db->query_count($table,$where);
		$result = $db->query_page_list($table,$page_size,$current_page,$order,$where);
		$adminList=array();
		while($row=$db->fetch($result))
		{
			$adminList[]=$row;
			//$suoyoushijian=$suoyoushijian+$row['fuweishijian'];
		}
		$pager = new Pager($page_size, $nums, $current_page, 8);
		$link = $pager->mod2();
		
		$smarty->assign('pager',$link);		
		$smarty->assign('adminList',$adminList);	
}
$smarty->assign("action",$action);
$smarty->assign("keyword",@$_GET["keyword"]);

$smarty->display('sysadmin/down.html');

require_once 'footer.php';
?>