<?php
session_start();
header("Cache-control: private");
header("Content-Type: text/html; charset=utf-8");
require_once '../configs/db.inc.php';
require_once '../configs/smarty.inc.php';
require_once '../includes/Pager.class.php';
require_once '../includes/utils.func.php';
require_once '../includes/init.php';
$smarty->caching=false;
#站点配置
if (file_exists('../configs/web.xml')){
	$xml = simplexml_load_file('../configs/web.xml');
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
//////////////////////////////////////////////////////////////////////////////

//走进嘉隆
$top_conmpany=alla('cn_conmpany_type',' and parent_id=1',' order by sort asc');
$smarty->assign('top_conmpany',$top_conmpany);
//banner
$banner_conmpany=$db->fetch($db->query("select * from cn_conmpany_type where id=9"));
$smarty->assign('banner_conmpany',$banner_conmpany);



//企业文化
$top_culture=alla('cn_culture_type',' and parent_id=1',' order by sort asc');
$smarty->assign('top_culture',$top_culture);
//banner
$banner_culture=$db->fetch($db->query("select * from cn_culture_type where id=1"));
$smarty->assign('banner_culture',$banner_culture);


//新闻资讯
$top_news=alla('cn_news_type',' and parent_id=1',' order by sort asc');
$smarty->assign('top_news',$top_news);
//banner
$banner_news=$db->fetch($db->query("select * from cn_news_type where id=1"));
$smarty->assign('banner_news',$banner_news);


//党建
$top_duilding=alla('cn_building_type',' and parent_id=1',' order by sort asc');
$smarty->assign('top_duilding',$top_duilding);
//banner
$banner_building=$db->fetch($db->query("select * from cn_building_type where id=1"));
$smarty->assign('banner_building',$banner_building);


//主营业务
$top_business=alla('cn_business_type',' and parent_id=1',' order by sort asc');
$smarty->assign('top_business',$top_business);
//banner
$banner_business=$db->fetch($db->query("select * from cn_business_type where id=1"));
$smarty->assign('banner_business',$banner_business);


//安全管理
$top_safety=alla('cn_safety_type',' and parent_id=1',' order by sort asc');
$smarty->assign('top_safety',$top_safety);
//banner
$banner_safety=$db->fetch($db->query("select * from cn_safety_type where id=1"));
$smarty->assign('banner_safety',$banner_safety);


//员工风采
$top_staff=alla('cn_staff_type',' and parent_id=1',' order by sort asc');
$smarty->assign('top_staff',$top_staff);
//banner
$banner_staff=$db->fetch($db->query("select * from cn_staff_type where id=1"));
$smarty->assign('banner_staff',$banner_staff);


//联系我们
$top_contact=alla('cn_contact_type',' and parent_id=1',' order by sort asc');
$smarty->assign('top_contact',$top_contact);
//banner
$banner_contact=$db->fetch($db->query("select * from cn_contact_type where id=1"));
$smarty->assign('banner_contact',$banner_contact);






/////////////////////////////////////////////////////////////左边导航
//走进嘉隆
$left_conmpany=alla('cn_conmpany_type',' and parent_id=4',' order by sort asc');
$smarty->assign('left_conmpany',$left_conmpany);

//党建
$left_building1=$db->query("select * from cn_building_type where parent_id=1 order by sort asc");
$left_building=array();
while ($row=$db->fetch($left_building1))
{
    $sleft_building1= $db->query("select * from cn_building_type where parent_id=".$row['id']);
    $sleft_building= array();
    while ($rows=$db->fetch($sleft_building1))
    {
        $sleft_building[]=$rows;
    }
    $left_building[]=array('id'=>$row['id'],'name'=>$row['name'],'sleft_building'=>$sleft_building);
}
$smarty->assign('left_building',$left_building);

//主营业务
$left_zhuyings=$db->query("select * from cn_business_type where parent_id=2 order by sort asc");
$left_zhuying=array();
while ($row=$db->fetch($left_zhuyings))
{
    $left_zhuying[]=$row;
}
$smarty->assign('left_zhuying',$left_zhuying);
$sleft_yanshen=$db->query("select * from cn_business_type where parent_id=3 order by sort asc");
$left_yanshen=array();
while ($row=$db->fetch($sleft_yanshen))
{
    $left_yanshen[]=$row;
}
$smarty->assign('left_yanshen',$left_yanshen);

//安全管理
$left_zhi=$db->fetch($db->query("select * from cn_safety_type where id=2 "));
$smarty->assign('left_zhi',$left_zhi);
$left_bai=$db->fetch($db->query("select * from cn_safety_type where id=3 "));
$smarty->assign('left_bai',$left_bai);
$sleft_bai=alla("cn_safety_type", " and parent_id=3", "order by sort asc");
$smarty->assign('sleft_bai',$sleft_bai);

//面包屑导航-员工风采
$whatid=empty($_GET["whatid"])?'':$_GET["whatid"];
$staff_name='';
if($whatid!='')
{
    $staff_name=$db->fetch($db->query("select * from cn_staff_type where id=$whatid"));
}
else {
    $staff_name=$db->fetch($db->query("select * from cn_staff_type where id=1"));
}

$smarty->assign('staff_name',$staff_name);

//友情链接
$footurl=alla('cn_along',' and type_id=3',' order by sort asc');
$smarty->assign('footurl',$footurl);

?>