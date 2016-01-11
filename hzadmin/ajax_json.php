<?php
if(isset($_COOKIE["cn_sysadmin_user_id"]) && isset($_COOKIE["cn_sysadmin_role_name"])){
	if($_COOKIE["cn_sysadmin_user_id"]=='' || $_COOKIE["cn_sysadmin_role_name"]==''){
		die("<script>top.location.href='login.php'</script>");
	}
}else{
	die("<script>top.location.href='login.php'</script>");
}


require_once '../configs/mysql.inc.php';


$action = $_POST["action"];
switch ($action){
	
	case "load_attr":
		
		break;
		
}
?>