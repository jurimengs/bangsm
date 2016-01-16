<?php
require 'inc.php';

if(empty($_SESSION["cn_sysadmin"])){
	die("<script>top.location.href='login.php'</script>");
}

$result = $db->query("select * from cn_menu where parent_id='0' order by sort asc");

$menuListArray=array();
while($row=$db->fetch($result)){
	
	if($_SESSION["cn_sysadmin"]['role_id']!=1){
		$result3 = $db->fetch($db->query("SELECT * FROM cn_role_menu WHERE menu_id='".$row['id']."' AND role_id=".$_SESSION["cn_sysadmin"]['role_id'].""));
		if($result3){
			$result2 =$db->query("select * from cn_menu where parent_id='".$row['id']."' order by sort asc");
			$subMenuList = array();
			while($row2=$db->fetch($result2)){
				$subMenuList[]=$row2;
			}
			$menuListArray[] = array('id'=>$row['id'],'name'=>$row['name'],'subMenuList'=>$subMenuList);
		}
	}else{
		$result2 = $db->query("select * from cn_menu where parent_id='".$row['id']."' order by sort asc");
			$subMenuList = array();
			while($row2=$db->fetch($result2)){
				$subMenuList[]=$row2;
			}
			$menuListArray[] = array('Id'=>$row['id'],'name'=>$row['name'],'subMenuList'=>$subMenuList);
	}
}

unset($subMenuList);
$smarty->assign("menuList",$menuListArray);
$smarty->display('sysadmin/left.html');
?>