<?php
require_once 'inc.php';

$action = empty($_GET["action"])?'':$_GET["action"];
if($action == "edit"){

	$isbool = false;
	if (file_exists('../configs/web.xml')){
		$xml = simplexml_load_file('../configs/web.xml');
		foreach($xml->xpath("/web/info/add") as $val){
			$val['value'] = $_POST[''.$val['filed'].''];
		}
		$xml->saveXML('../configs/web.xml');
		$isbool = true;
	}
	else{
		info_sysadmin_error('读取站点配置文件失败');
	}
			
	if($isbool){
		success_msg('修改成功',prev_url());
	}else{
		success_msg('修改失败','back');
	}	
}
if($action == ''){
	if (file_exists('../configs/web.xml')){
		$webinfo = array();
		$xml = simplexml_load_file('../configs/web.xml');
		foreach ($xml->xpath('/web/info/add') as $value){
			$webinfo[] = $value;
		}
		$smarty->assign('webinfo',$webinfo);
	}
	else{
		info_sysadmin_error('读取站点配置文件失败');
	}
}

$smarty->assign("action",$action);
$smarty->display('sysadmin/web_info.html');
require_once 'footer.php';
?>