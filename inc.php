<?php 

// session_start();
// // 导入Smarty类文件
// require_once 'libs/Smarty.class.php';

// // 实例化Smarty对象
// $smarty = new Smarty();
// // 给Smarty对象的成员属性赋值   配置Smarty环境
// $smarty->template_dir = "./templates";   // 设置模板页面的存放路径
// $smarty->compile_dir  = "./templates_c"; // 设置混合编译页面的存放路径
session_start();
header("Cache-control: private");
header("Content-Type: text/html; charset=utf-8");

require_once './configs/db.inc.php';
require_once './configs/smarty.inc.php';
require_once './includes/Pager.class.php';
require_once 'includes/utils.func.php';
require_once 'includes/init.php';
$smarty->caching=false;

#站点配置
if (file_exists('configs/web.xml')){
	$xml = simplexml_load_file('configs/web.xml');
	foreach ($xml->xpath('/web/info/add') as $value){
		$webinfo[] = $value;
	}
}else{
	die('站点配置文件读取失败。');
}

$web=array();
$web['title'] = $webinfo[0]['value'];
$web['keywords'] = $webinfo[1]['value'];
$web['description'] = $webinfo[2]['value'];
$smarty->assign('web',$web);
$smarty->assign("keyword",@$_GET["keyword"]);


// 计算中文字符串长度
function utf8_strlen($string = null) {
	// 将字符串分解为单元
	preg_match_all("/./us", $string, $match);
	// 返回单元个数
	return count($match[0]);
}

$nowuser='';
if(isset($_SESSION['user']['username']) && !empty($_SESSION['user']['username'])){
    $nowuser=$_SESSION['user']['username'];
}
$smarty->assign('nowuser',$nowuser);
////////////////////////////////////////////////////////////////////////////////////////////////////

?>