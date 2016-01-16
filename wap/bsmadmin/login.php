<?php
session_start();

header("Content-Type: text/html; charset=utf-8");

require_once '../configs/db.inc.php';
require_once '../configs/smarty.inc.php';

$action = empty($_POST["action"])?'':$_POST["action"];

if($action=='login'){
		
		$user_id = $_POST['txtUserid'];
		$password = $_POST['txtPassword'];
		$code = $_POST['txtCode'];
		$ip = $_SERVER["REMOTE_ADDR"];
		$time = time();
		
		if(md5($code)!=$_SESSION["authcode"]){
			$db->exec("INSERT INTO cn_login_log(user_id,time,ip,contents)
						values('$user_id',$time,'$ip','验证码不正确!')");
			die('3');
		}
		
		$admin = $db->fetch($db->query("SELECT * FROM cn_admin WHERE user_id='$user_id'"));
		
		if(!$admin){
			$db->exec("INSERT INTO cn_login_log(user_id,time,ip,contents)
						values('$user_id',$time,'$ip','用户名 $user_id 不存在!')");
			die("4");
		}
		elseif($admin['state_id']!=1){
			$db->exec("INSERT INTO cn_login_log(user_id,time,ip,contents)
						values('$user_id',$time,'$ip','用户名 $user_id 被锁定!')");
			die("2");
		}
		elseif($admin['password']!=md5($password)){
			$db->exec("INSERT INTO cn_login_log(user_id,time,ip,contents)
						values('$user_id',$time,'$ip','用户名 $user_id 密码不正确!')");
			die("5");
		}else{
			$db->exec("INSERT INTO cn_login_log(user_id,time,ip,contents)
						values('$user_id',$time,'$ip','用户名 $user_id 登录成功!')");
			
			$role=$db->fetch($db->query("SELECT * FROM cn_role WHERE id=".$admin['role_id']));
			
			// 更新最后登录时间和IP
        	$db->exec("UPDATE cn_admin SET last_time=" . time() . " WHERE user_id='".$user_id."'");
				 
			$_SESSION['cn_sysadmin']['user_id'] = $user_id;
			$_SESSION['cn_sysadmin']['role_name'] = $role['name'];
			$_SESSION['cn_sysadmin']['role_id'] = $role['id'];
			die('1');
		}
}

$smarty->display('sysadmin/login.html');

?>