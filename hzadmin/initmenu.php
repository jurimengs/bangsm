<?php

require 'inc.php';
require_once '../weixin/globleconfig.php';
require_once '../weixin/WxUtil.php';
require_once '../weixin/RequestUtil.php';

if(empty($_SESSION["cn_sysadmin"])){
	die("<script>top.location.href='login.php'</script>");
}

echo init();

function init(){
	$url = wxCreateBottommenuUrl().WxUtil::getWxTokenFromDB();
	$menustr = '{
	    "button": [
	        {
	            "type": "view",
	            "name": "资讯",
	            "url": "http://bangmaisiw.w107.mc-test.com/wap/News.php"
	        },
	        
			
	        {
	            "name": "互动",
	            "sub_button": [
	                {
	                    "type": "view",
	                    "name": "来稿说明",
	                    "url": "http://bangmaisiw.w107.mc-test.com/wap/Engage.php"
	                },
	                {
	                    "type": "click",
	                    "name": "进入聊天室",
	                    "key": "enterChatingroom"
	                },
	                {
	                    "type": "click",
	                    "name": "退出聊天室",
	                    "key": "exitChatingroom"
	                }
	            ]
	        },
	        
			
	        {
	            "name": "服务",
	            "sub_button": [
	                {
	                    "type": "view",
	                    "name": "学习主题",
	                    "url": "http://bangmaisiw.w107.mc-test.com/wap/Theme.php"
	                },
	                {
	                    "type": "view",
	                    "name": "公开研讨课",
	                    "url": "http://bangmaisiw.w107.mc-test.com/wap/Course.php"
	                },
	                {
	                    "type": "view",
	                    "name": "定制服务",
	                    "url": "http://bangmaisiw.w107.mc-test.com/wap/Ordering.php"
	                }
	            ]
	        }
	    ]
	}';
	
	$respArr = RequestUtil::httpPost($url, $menustr, 'post');
	if($respArr["errcode"] == 0) {
		return "菜单初始化成功，将在24小时内生效。";
	}
	
	return $respArr["errcode"].":".$respArr["errmsg"];
}
?>