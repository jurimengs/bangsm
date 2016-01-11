<?php
require_once 'inc.php';

$table='cn_industry';
$smarty->assign('table',$table);
$action = empty($_GET["action"])?'':$_GET["action"];

if($action==""){
    $where='';
    #产品分类递归
    if(!empty($_GET['type_id'])){
        $typeid_str = '';
        getall_producttype_parent_id("cn_industry_type",$typeid_str, $_GET['type_id']);
        $typeid_str = $_GET['type_id'].$typeid_str;
        $where=" AND type_id in(".$typeid_str.")";
    }
    $tid = empty($_GET["tid"])?'':$_GET["tid"];
    $tid2 = empty($_GET["type_id"])?'':$_GET["type_id"];
    if($tid2!='' && $tid==''){
        $tid=$tid2;
    }
    $smarty->assign('tid',$tid);
    $where.= @$_GET['keyword']!=''?" AND (title LIKE '%".@$_GET['keyword']."%')":'';
    $order=' ORDER BY sort asc,id DESC';
    $page_size = 20;
    $current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
    $nums = $db->query_count($table,$where);
    $productList='';
    $result = $db->query_page_list($table,$page_size,$current_page,$order,$where);
    while ($row = $db->fetch($result)){
        $result2=$db->query('SELECT name FROM cn_industry_type WHERE id='.$row['type_id']);
        $type=$db->fetch($result2);
        $productList[] = array(
            'id'=>$row['id'],
            'title'=>$row['title'],
            'type_name'=>$type['name'],
            'time'=>$row['time'],
            'simage'=>$row['simage'],
            'sort'=>$row['sort'],
            'type_id'=>$row['type_id']
        );
    }
    $pager = new Pager($page_size, $nums, $current_page, 8);
    $link = $pager->mod5();

    $smarty->assign('pager',$link);
    $smarty->assign('productList',$productList);
    $smarty->assign('type_id',@$_GET['type_id']);
    #分类
    $typeList = array();
    display_type($db,$typeList,0,0);
    $smarty->assign('typeList',$typeList);
    $smarty->assign('pageno',$current_page);
}
/*
if($action == "delete"){
	
		$id = @$_POST['id'];
		$isbool = true;
		if(!empty($id))
		{
			for ($i = 0; $i < count($id); $i++) {
				$product = $db->fetch($db->query("SELECT * FROM cn_aboutus WHERE id=".$id[$i]));
				if($product){
					@unlink('../'.$product['image']);
					@unlink('../'.$product['simage']);
				}
				$isbool = $db->delete($table, "id=".$id[$i]);
			}
			if($isbool!==false){
				success_msg('删除成功',prev_url());
			}else{
				error_msg('删除失败','back');
			}
		}
}*/
if($action == "delete"){

    $id = @$_POST['id'];
    $yincang = empty($_POST["yincang"])?'':$_POST["yincang"];
    $isbool = true;
    if(!empty($id))
    {
        if($yincang=="1"){
            for ($i = 0; $i < count($id); $i++) {
                $product = $db->fetch($db->query("SELECT * FROM $table WHERE id=".$id[$i]));
                if($product){
                    @unlink('../'.$product['image']);
                    @unlink('../'.$product['simage']);
                }
                $isbool = $db->delete($table, "id=".$id[$i]);
            }
            if($isbool!==false){
                success_msg('删除成功',prev_url());
            }else{
                error_msg('删除失败','back');
            }
        }
        elseif($yincang=="2"){
            for ($i = 0; $i < count($id); $i++) {
                $product = $db->fetch($db->query("SELECT * FROM $table WHERE id=".$id[$i]));
                if($product){
                    //@unlink('../'.$product['image']);
                    //@unlink('../'.$product['simage']);
                }
                $mod_content = "tuijian='1'";
                $where = 'id='.$id[$i];
                $isbool = $db->update($table, $mod_content, $where);
            }
            if($isbool!==false){
                success_msg('推荐成功',prev_url());
            }else{
                error_msg('推荐失败','back');
            }
        }
        elseif($yincang=="3"){
            for ($i = 0; $i < count($id); $i++) {
                $product = $db->fetch($db->query("SELECT * FROM $table WHERE id=".$id[$i]));
                if($product){
                    //@unlink('../'.$product['image']);
                    //@unlink('../'.$product['simage']);
                }
                $mod_content = "tuijian='2'";
                $where = 'id='.$id[$i];
                $isbool = $db->update($table, $mod_content, $where);
            }
            if($isbool!==false){
                success_msg('取消推荐成功',prev_url());
            }else{
                error_msg('取消推荐失败','back');
            }
        }
    }
}
if($action=="tj"){
    #分类
    $typeList = array();
    display_type($db,$typeList,0,0);
    $smarty->assign('typeList',$typeList);
}
if($action=="add"){


//     echo "<pre>";
//     print_r($_POST);
//     echo "</pre>";
//     die();
    $title = $_POST['title'];
    $type_id = $_POST['type_id'];
    $keywords = $_POST['keywords'];
    $image = $_POST['image'];
    $simage = $_POST['simage'];
    $description = $_POST['description'];
    $contents = $_POST['contents'];
    $description = str_replace("'","\'",$description);
    $contents = str_replace("'","\'",$contents);
    $time = time();
    $sort=$_POST['sort'];
    $columnName = "title,keywords,description,contents,type_id,image,simage,time,sort";
    $value = "'$title','$keywords','$description','$contents',$type_id,'$image','$simage',$time,$sort";
    $isbool = $db->insert($table, $columnName, $value);
    if($isbool!==false){
        success_msg('添加成功','?type_id='.@$_GET['type_id']);
    }else{
        error_msg('添加失败','back');
    }
}

if($action=="bj"){
    #
    $id=$_GET['id'];
    $result = $db->query_by_id($table,$id);
    $row=$db->fetch($result);
    $smarty->assign('product',$row);
    #分类
    $typeList = array();
    edit_display_type($db,$typeList,0,0,$row['type_id']);
    $smarty->assign('typeList',$typeList);
}
if($action=="edit"){
    $isbool = false;
    $id = $_POST['id'];
    $title = $_POST['title'];
    $type_id = $_POST['type_id'];
    $keywords = $_POST['keywords'];
    $image = $_POST['image'];
    $simage = $_POST['simage'];
    $description = $_POST['description'];
    $contents = $_POST['contents'];

    $description = str_replace("'","\'",$description);
    $contents = str_replace("'","\'",$contents);
    $sort = $_POST['sort'];

    $mod_content = "title='$title',image='$image',
						simage='$simage',keywords='$keywords',
						description='$description',contents='$contents',
						type_id=$type_id,sort=$sort
						";
    $where = 'id='.$id;
    $isbool = $db->update($table, $mod_content, $where);
    if($isbool!==false){
        success_msg('修改成功','?type_id='.@$_GET['type_id']);
    }else{
        error_msg('修改失败','back');
    }

}

/*
 * 添加模式
 */
function display_type($db,&$typeList,$parent_id,$level){
    $result=$db->query("SELECT * FROM cn_industry_type WHERE parent_id=".$parent_id." ORDER BY sort,id ASC");
    while($row=$db->fetch($result)){
        $typeList[] = array('id'=>$row['id'],'name'=>$row['name'],'level'=>str_repeat('&nbsp;&nbsp;&nbsp;',$level));
        display_type($db,$typeList,$row['id'], $level+1);
    }
}
/*
 * 编辑模式
 */
function edit_display_type($db,&$typeList,$parent_id,$level,$type_id){
    $result=$db->query("SELECT * FROM cn_industry_type WHERE parent_id=".$parent_id." ORDER BY sort,id ASC");
    while($row=$db->fetch($result)){
        if($row['id']==$type_id){
            $typeList[] = array('id'=>$row['id'],'name'=>$row['name'],'level'=>str_repeat('&nbsp;&nbsp;&nbsp;',$level),'selected'=>'true');
        }else{
            $typeList[] = array('id'=>$row['id'],'name'=>$row['name'],'level'=>str_repeat('&nbsp;&nbsp;&nbsp;',$level),'selected'=>'false');
        }
        edit_display_type($db,$typeList,$row['id'], $level+1,$type_id);
    }
}

$smarty->assign("action",$action);
$smarty->assign("keyword",@$_GET["keyword"]);
$smarty->assign("type_id",@$_GET["type_id"]);
$smarty->display('sysadmin/industry.html');
require_once 'footer.php';
?>