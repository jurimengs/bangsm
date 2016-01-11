<?php
require_once 'inc.php';

$table='cn_role';

$action = empty($_GET["action"])?'':$_GET["action"];

if($action == ""){
		$where= @$_GET['keyword']!=''?" AND `name` LIKE '%".@$_GET['keyword']."%'":'';
		$order=' ORDER BY id DESC';
		
		$page_size = 20;
		$current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
		$nums = $db->query_count($table,$where);
		$roleList=array();
		$result = $db->query_page_list($table,$page_size,$current_page,$order,$where);
		while ($row=$db->fetch($result)) {
			//查询用户数量
			$user_count=$db->query_count("cn_admin",'and role_id='.$row['id']);
			$roleList[] = array('name'=>$row['name'],'id'=>$row['id'],'user_count'=>$user_count);
		}
		$pager = new Pager($page_size, $nums, $current_page, 8);
		$link = $pager->mod5();
		
		$smarty->assign('pager',$link);
		$smarty->assign('roleList',$roleList);
		
}
	
if($action == "delete"){
	
		$id = $_POST['id'];
		$isbool = true;
		if(!empty($id))
		{
			for ($i = 0; $i < count($id); $i++) {
				
				$count = $db->query_count('cn_admin',"AND role_id=".$id[$i]."");
				if($count>0){
					info_sysadmin_error('该角色下有管理员，请先删除管理员');
				}else{
					$isbool = $db->delete($table, "id=".$id[$i]);
				}
			}
			if($isbool!==false){
				success_msg('删除成功',prev_url());
			}else{
				error_msg('删除失败','back');
			}
				
		}
}
		
if($action == "add"){
		
		$name = $_POST['name'];
		
		//检测名称
		$count=$db->query_count($table,"and name='$name'");
		if($count>0){
			info_sysadmin_error('角色名称"'.$name.'"被占用');			
		}
		
		$columnName = "`name`";
		$value = "'$name'";
		$isbool = $db->insert($table, $columnName, $value);
		if($isbool!==false){
			success_msg('添加成功','?');
		}else{
			error_msg('添加失败','back');
		}
}
	
if($action=="bj"){
		
		
		$id=$_GET['id'];
		$result = $db->query_by_id($table,$id);
		$row=$db->fetch($result);
		$smarty->assign('role',$row);
		
}
if($action=="edit"){
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$mod_content = "name='$name'";
		$where = 'id='.$id;
		
		//检测名称
		$count=$db->query_count($table,"and name='$name' and id<>$id");
		if($count>0){
			info_sysadmin_error('角色名称"'.$name.'"被占用');			
		}		
		$isbool = $db->update($table, $mod_content, $where);
		if($isbool!==false){
			success_msg('修改成功','?');
		}else{
			error_msg('修改失败','back');
		}
}
if($action=="rolemenu"){
		$id = $_GET['id'];
		$roleList =array();
		$result = $db->query('SELECT * FROM cn_role WHERE id='.$id);
		$role = $db->fetch($result);
		
		$smarty->assign('role',$role);
		
		/*$result1 = $db->query('SELECT * FROM cn_role');
		while ($row1=$db->fetch_array($result1)) {
			$roleList[] = array('name'=>$row1['name'],'id'=>$row1['id']);
		}
		$smarty->assign('roleList',$roleList);*/
		
		$result2 = $db->query('SELECT * FROM cn_menu');
		while ($row2=$db->fetch($result2)) {
			$selected=$db->query_count('cn_role_menu', "and menu_id='".$row2['id']."' and role_id=".$id."");
			$menuList[] = array('id'=>$row2['id'],'parent_id'=>$row2['parent_id'],'name'=>$row2['name'],'selected'=>$selected);
		}
		$smarty->assign('menuList',$menuList);
}
if($action=="edit_rolemenu"){
		
		$role_id = $_POST['role_id'];
		$right = $_POST['right'];
		
		#先删除该角色所有权限
		$db->exec("DELETE FROM cn_role_menu WHERE role_id=$role_id");
		$isbool='';
		for ($i = 0; $i < count($right); $i++) {
			$isbool=$db->exec("INSERT INTO cn_role_menu(menu_id,role_id) VALUES('$right[$i]',$role_id)");
		}
		
		if($isbool!==false){
			success_msg('分派权限成功','?');
		}else{
			error_msg('分派权限失败','back');
		}
		
		
}

$smarty->assign("action",$action);
$smarty->assign("keyword",@$_GET["keyword"]);

$smarty->display('sysadmin/role.html');
require_once 'footer.php';
?>