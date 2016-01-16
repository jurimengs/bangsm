<?php
require_once 'inc.php';

$table='cn_about';

$action = empty($_GET["action"])?'':$_GET["action"];
if($action == ""){
    $where= " ";
    $where.= @$_GET['keyword']!=''?" AND (username like '%".@$_GET['keyword']."%')  or (email LIKE '%".@$_GET['keyword']."%') ":'';
    $order=' ORDER BY id DESC';

    $page_size = 20;
    $current_page = !@$_GET['p'] ? 1 : @$_GET['p'];
    $nums = $db->query_count($table,$where);
    $result = $db->query_page_list($table,$page_size,$current_page,$order,$where);
    $userList=$db->fetch_all($result);

    $pager = new Pager($page_size, $nums, $current_page, 8);
    $link = $pager->mod5();

    $smarty->assign('pager',$link);
    $smarty->assign('userList',$userList);

}
if($action == "delete"){

    $id = @$_POST['id'];
    $isbool = true;
    if(!empty($id))
    {
        for ($i = 0; $i < count($id); $i++) {
            $isbool = $db->delete($table, "id=".$id[$i]);
        }

        if($isbool!==false){
            success_msg('删除成功','?');
        }else{
            error_msg('删除失败','back');
        }
    }
}

if($action == "bj"){

    $id=$_GET['id'];
    $result = $db->query_by_id($table,$id);
    $row=$db->fetch($result);
    $smarty->assign('user',$row);

}
if($action=="edit"){

    $id = $_POST['id'];
    $state = $_POST['state'];


    $mod_content = "state=$state";
    $where = 'id='.$id;


    $isbool = $db->update($table, $mod_content, $where);
    if($isbool!==false)
        success_msg('修改成功','?');
    else
        error_msg('修改失败','back');

}

$smarty->assign("action",$action);
$smarty->assign("keyword",@$_GET["keyword"]);
$smarty->display('sysadmin/yuyue.html');
require_once 'footer.php';
?>