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
require_once 'includes/pc.php';
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

/*
 * 判断客户端用什么设备访问网站
 * */


$nowuser='';
if(isset($_SESSION['user']['username']) && !empty($_SESSION['user']['username'])){
    $nowuser=$_SESSION['user']['username'];
}
$smarty->assign('nowuser',$nowuser);
//////////////////////////////////////////////////////////////////////////////



//新闻
$news_type=alla("cn_news_type"," and parent_id=0"," order by sort asc");
$smarty->assign("news_type",$news_type);


//主题
$theme_type=alla("cn_theme_type"," and parent_id=0"," order by sort asc");
$smarty->assign("theme_type",$theme_type);

//公开引导课
$course_type=alla("cn_course_type"," and parent_id=0"," order by sort asc");
$smarty->assign("course_type",$course_type);

//往期时间计算 往期3个月
$date=date("Y-m-d",time()-(60*60*24)*30*3);

//Banner图
$Banner=alla("cn_along"," and type_id=1 and guishu='index'"," order by sort asc");
$smarty->assign("banner",$Banner);

?>