<?php
require_once 'inc.php';

$table='cn_admin';

$action = empty($_GET["action"])?'':$_GET["action"];
if($action == "edit"){
		
	$id = $_POST['id'];
	$user_id = $_POST['user_id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$oldpassword = $_POST['oldpassword'];
	
	if($oldpassword!=''){
		if($password==''){
			info_sysadmin_error('请输入新密码');
		}
	}
	
	#检测email
	$count=$db->query_count($table,"and email='$email' and id<>$id");
	if($count>0){
		info_sysadmin_error('Email“'.$email.'”被占用');
	}
	#不修改密码
	if(!empty($oldpassword)){
	
		#检测旧密码
		$result=$db->query("SELECT * FROM cn_admin WHERE `user_id`='$user_id' AND `password`='".md5($oldpassword)."'");
		$admin = $db->fetch($result);
		if(!$admin){
			info_sysadmin_error('旧密码不正确','back');
		}
		
		$mod_content = "username='$username',password='".md5($password)."',`email`='$email'";
	}else{
		$mod_content = "username='$username',`email`='$email'";
	}
	
	$where = "user_id='$user_id'";		
	$isbool = $db->update($table, $mod_content, $where);
	if($isbool!==false){
		success_msg('修改成功','?');
	}else{
		error_msg('修改失败','back');
	}
		
}
if($action == ''){
	$result = $db->query("SELECT * FROM cn_admin WHERE user_id='".$_SESSION['cn_sysadmin']['user_id']."'");
	$row=$db->fetch($result);		
	$smarty->assign('admin',$row);
}

$smarty->assign("action",$action);
$smarty->display('sysadmin/edit_password.html');
require_once 'footer.php';
?>