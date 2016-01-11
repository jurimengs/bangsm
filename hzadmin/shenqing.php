<?php
require_once 'inc.php';

$table='cn_applyfor';
$smarty->assign('table',$table);
$action = empty($_GET["action"])?'':$_GET["action"];
$smarty->assign('action',$action);

//主页型
if($action==""){
		 $where=' ';

		//if($search!=''){$where.=" and bianhao like '%".$search."%'";}
		$order=' ORDER BY time desc';
		$page_size =10;
		$current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
		$nums = $db->query_count('cn_applyfor',$where);
		$result1 = $db->query_page_list('cn_applyfor',$page_size,$current_page,$order,$where);
		$list=array();
		while ($row=$db->fetch($result1))
		{
			$list[]=$row;
		}
		$pager = new Pager($page_size, $nums, $current_page, 8);
		$link = $pager->mod5();
		$smarty->assign('pager',$link);
		$smarty->assign('list',$list);

}

if($action == "delete"){

	
	
    $id = @$_POST['id'];
    $yincang = empty($_POST["yincang"])?'':$_POST["yincang"];
    $isbool = true;
    if(!empty($id))
    {
      
            for ($i = 0; $i < count($id); $i++) {
            
                $isbool = $db->delete($table, "id=".$id[$i]);
            }
            echo "<script>alert('删除成功'); location.href='shenqing.php';</script>";
		            if($isbool!==false){
		                success_msg('删除成功',prev_url());
		            }else{
		                error_msg('删除失败','back');
		            }
		   
     
    }
}



	
if($action=="bj"){
		#
		$id=$_GET['id'];
		$result = $db->query_by_id($table,$id);
		$row=$db->fetch($result);
		$smarty->assign('list',$row);
		#分类
}
//修改页面
if($action=="edit"){
	
		$isbool = false;
		$id = $_POST['id'];
		$title = $_POST['title'];
		$phone = $_POST['phone'];
		$tmie1 = $_POST['time1'];
		$tmie2 = time();
		$answer = $_POST['answer'];
		$question = $_POST['question'];

				$mod_content= "question='$question',
												answer='$answer',
												title='$title',
												time1='$tmie1',
												time2='$tmie2',
												phone='$phone',
												state='1'
												";
		$where = 'id='.$id;
		$isbool = $db->update($table, $mod_content, $where);
		echo "<script>alert('回复成功'); location.href='liuyan.php';</script>";
		if($isbool!==false){
			success_msg('修改成功','?');
		}else{
			error_msg('修改失败','back');
		}
		
}


/*
 * 编辑模式
 */
// function edit_display_type($db,&$typeList,$parent_id,$level,$type_id){
// 	$result=$db->query("SELECT * FROM cn_applyfor WHERE parent_id=".$parent_id." ORDER BY sort,id ASC");	
// 	while($row=$db->fetch($result)){		
// 		if($row['id']==$type_id){
// 			$typeList[] = array('id'=>$row['id'],'name'=>$row['name'],'level'=>str_repeat('&nbsp;&nbsp;&nbsp;',$level),'selected'=>'true');
// 		}else{
// 			$typeList[] = array('id'=>$row['id'],'name'=>$row['name'],'level'=>str_repeat('&nbsp;&nbsp;&nbsp;',$level),'selected'=>'false');
// 		}
// 		edit_display_type($db,$typeList,$row['id'], $level+1,$type_id);
// 	}
// }

$smarty->assign("action",$action);
$smarty->assign("keyword",@$_GET["keyword"]);
$smarty->assign("type_id",@$_GET["type_id"]);
$smarty->display('sysadmin/shenqing.html');
require_once 'footer.php';
?>