<?php
require_once 'inc.php';

$table='cn_business_type';
$action = empty($_GET["action"])?'':$_GET["action"];
if($action == ""){
		$typeList=array();
		display_type($db,$typeList,0,0);
		$smarty->assign('typeList',$typeList);
}
if($action=="delete"){
		if(!empty($_GET['id'])){
			$id=$_GET['id'];
			#检测是否有子类
			$sub_type=$db->query_count("cn_business_type", "AND parent_id=$id");
			
			if($sub_type>0){
				info_sysadmin_error('该分类有子类，不能删除');
			}
			#检测是否有文章
			$product=$db->query_count("cn_business", "AND type_id=$id");
			if($product>0){
				info_sysadmin_error('该分类有产品，不能删除');
			}
			
			$isbool = $db->delete($table, "id=".$id);
			if($isbool!==false){
				success_msg('删除成功',prev_url());
			}else{
				error_msg('删除失败','back');
			}
		}
}
if($action=="tj"){
		
		#分类
		$typeList=array();
		display_type($db,$typeList,0,0);		
		$smarty->assign('typeList',$typeList);
}
if($action == "add"){
	
		$name = $_POST['name'];
		$sort = $_POST['sort'];
		$parent_id = $_POST['parent_id'];
		$description = $_POST['description'];
        $image = $_POST['image'];
		#检测分类名称是否重复
		$count = $db->query_count($table,"AND parent_id=$parent_id AND name='".$name."'");
		if($count>0){
			info_sysadmin_notice('该分类名称已经存在，请更换');
		}
		
		$columnName = "name,sort,parent_id,description,image";
		$value = "'$name',$sort,$parent_id,'$description','$image'";
		$isbool = $db->insert($table, $columnName, $value);
		if($isbool!==false){
			success_msg('添加成功','?');
		}else{
			error_msg('添加失败','back');
		}
}
	
if($action == "bj"){
		
		#实体
		$id=$_GET['id'];
		$result = $db->query_by_id($table,$id);
		$row=$db->fetch($result);		
		$smarty->assign('type',$row);
		
		#分类
		$typeList=array();
		display_type($db,$typeList,0,0);		
		$smarty->assign('typeList',$typeList);
		
}
if($action=="edit"){
		
		$id = $_POST['id'];
		$name = $_POST['name'];
		$sort = $_POST['sort'];
		$description = $_POST['description'];
		$parent_id=$_POST['parent_id'];
        $image = $_POST['image'];
		#检测分类名称是否重复
		$count = $db->query_count($table,"AND parent_id=$parent_id AND name='".$name."' AND id<>$id");
		if($count>0){
			info_sysadmin_notice('该分类名称已经存在，请更换');
		}
		
		#检测上级分类是否是子类或本身
		if($parent_id==$id){
			info_sysadmin_error('上级分类不能是本身');
		}
		
		$typeList=array();
		display_type($db,$typeList,$id,0);
		if(!empty($typeList)){
			foreach($typeList as $item){
				$type_array[]= $item['id'];
			}
			if (in_array($_POST['parent_id'], $type_array))
			{
				info_sysadmin_error('上级分类不能是自己的子类');
			}
		}
		
		$mod_content = "name='$name',sort=$sort,parent_id=$parent_id,description='$description',image='$image'";
		$where = 'id='.$id;
		$isbool = $db->update($table, $mod_content, $where);
		if($isbool!==false){
			success_msg('修改成功',"?");
		}else{
			error_msg('修改失败','back');
		}
}

/*
 * 递归所有分类
 */
function display_type($db,&$typeList,$parent_id,$level){
	$result=$db->query("SELECT * FROM cn_business_type WHERE parent_id=".$parent_id." ORDER BY sort ASC,id ASC");	
	while($row=$db->fetch($result)){		
		$product_count=$db->query_count("cn_business","and type_id=".$row['id']);
		$typeList[] = array('id'=>$row['id'],'name'=>$row['name'],'sort'=>$row['sort'],'parent_id'=>$row['parent_id'],'product_count'=>$product_count,'level'=>str_repeat("&nbsp;&nbsp;&nbsp;",$level));
		display_type($db,$typeList,$row['id'], $level+1);
	}
}
	
$smarty->assign("action",$action);
$smarty->assign("parent_id",@$_GET['parent_id']);
$smarty->assign("keyword",@$_GET["keyword"]);

$smarty->display('sysadmin/business_type.html');
require_once 'footer.php';
?>