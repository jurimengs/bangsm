<?php
require_once 'inc.php';

$action = empty($_GET["action"])?'':$_GET["action"];
if($action == "edit"){
		
		$email = $_POST['email'];
	
		$isbool = $db->query("UPDATE cn_qqemail SET email='$email' WHERE id=1");
		if($isbool!==false){
			success_msg('修改成功','?');
		}else{
			error_msg('修改失败','back');
		}
}

if($action == ''){
	$result=$db->query_by_id('cn_qqemail', 1);
	$mailInfo = $db->fetch($result);
	$smarty->assign('mailInfo',$mailInfo);
}

$smarty->assign("action",$action);
$smarty->display('sysadmin/serverinfo.html');
require_once 'footer.php';
?>