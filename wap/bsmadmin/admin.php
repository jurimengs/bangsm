<?php
require_once 'inc.php';

$table='cn_admin';

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
			success_msg('删除成功',prev_url());
		}else{
			error_msg('删除失败','back');
		}
	}
}

if($action == 'tj'){
		
		$roleList=array();
		$result=$db->query("SELECT * FROM `cn_role`");
		while ($row=$db->fetch($result)) {
			$roleList[] = $row;
		}
		$smarty->assign('roleList',$roleList);
		
		$stateList=array();
		$result=$db->query("SELECT * FROM `cn_state`");
		while ($row=$db->fetch($result)) {
			$stateList[] = $row;
		}
		$smarty->assign('stateList',$stateList);
		
}
if($action == 'add'){
		$user_id = $_POST['user_id'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$email = $_POST['email'];
		$role_id = $_POST['role_id'];
		$state_id = $_POST['state_id'];
		$create_time = time();
		$last_time = time();
		
		//检测用户名
		$count=$db->query_count($table,"AND user_id='$user_id'");
		if($count>0){
			info_sysadmin_error('用户名“'.$user_id.'”被占用');
		}
		
		//检测email
		$count=$db->query_count($table,"AND email='$email'");
		if($count>0){
			info_sysadmin_error('Email“'.$email.'”被占用');
		}
		
		$columnName = "`user_id`,`username`,`password`,`email`,`role_id`,`state_id`,`create_time`,`last_time`";
		$value = "'$user_id','$username','$password','$email',$role_id,$state_id,$create_time,$last_time";
		$isbool = $db->insert($table, $columnName, $value);
		if($isbool!==false){
			success_msg('添加成功','?');
		}else{
			error_msg('添加失败','back');
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
	
	
	$roleList=array();
	$result=$db->query("SELECT * FROM `cn_role`");
	while ($row=$db->fetch($result)) {
		$roleList[] = $row;
	}
	$smarty->assign('roleList',$roleList);
	
	$stateList=array();
	$result=$db->query("SELECT * FROM `cn_state`");
	while ($row=$db->fetch($result)) {
		$stateList[] = $row;
	}
	$smarty->assign('stateList',$stateList);
}
if($action == 'edit'){
		
		$id = $_POST['id'];
		$user_id = $_POST['user_id'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$role_id = @$_POST['role_id'];
		$state_id = @$_POST['state_id'];
		
		
		//检测用户名
		$count=$db->query_count($table,"AND user_id='$user_id' AND id<>$id");
		if($count>0){
			info_sysadmin_error('用户名“'.$user_id.'”被占用');
		}
		
		//检测email
		$count=$db->query_count($table,"AND email='$email' AND id<>$id");
		if($count>0){
			info_sysadmin_error('Email“'.$email.'”被占用');
		}
		
		if($id==1){
			$mod_content = "user_id='$user_id',username='$username',`email`='$email'";
		}else{
			$mod_content = "user_id='$user_id',username='$username',`email`='$email',role_id=$role_id,state_id=$state_id";
		}
		$where = 'id='.$id;
		$isbool = $db->update($table, $mod_content, $where);
		if($isbool!==false){
			success_msg('修改成功','?');
		}else{
			error_msg('修改失败','back');
		}
}
if($action == ''){
		$where= @$_GET['keyword']!=''?" AND (`username` LIKE '%".$_GET['keyword']."%' OR `user_id` LIKE '%".$_GET['keyword']."%')":'';
		$order=' ORDER BY id DESC';
		
		$page_size = 20;
		$current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
		$nums = $db->query_count($table,$where);
		$result = $db->query_page_list($table,$page_size,$current_page,$order,$where);
		$adminList=array();
		while($row=$db->fetch($result))
		{
			//角色
			$result2=$db->query("SELECT name,id FROM cn_role WHERE id=".$row['role_id']);
			while ($row2=$db->fetch($result2)) {
				$role_name=$row2['name'];
			}
			//状态
			$result3=$db->query("SELECT name,id FROM cn_state WHERE id=".$row['state_id']);
			while ($row3=$db->fetch($result3)) {
				$state_name=$row3['name'];
			}
			$adminList[]=array('user_id'=>$row['user_id'],
			'username'=>$row['username'],
			'role_name'=>$role_name,
			'state_name'=>$state_name,
			'last_time'=>date("Y-m-d H:i:s", $row['last_time']),
			'create_time'=>date("Y-m-d H:i:s", $row['create_time']),
			'id'=>$row['id']);
		}
		$pager = new Pager($page_size, $nums, $current_page, 8);
		$link = $pager->mod5();
		
		$smarty->assign('pager',$link);
		$smarty->assign('adminList',$adminList);

}
$smarty->assign("action",$action);
$smarty->assign("keyword",@$_GET["keyword"]);

$smarty->display('sysadmin/admin.html');

require_once 'footer.php';
?>