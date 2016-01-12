<?php
require_once("globleconfig.php");
require_once("WxUtil.php");
require_once("RequestUtil.php");
require_once("../configs/db.inc.php");

init();

function init(){
	$url = wxCreateBottommenuUrl().WxUtil::getWxTokenFromDB();
	$menustr = '{
	    "button": [
	        {
	            "type": "view",
	            "name": "资讯",
	            "url": "http://demo.alsovalue.com/BONZWISE/News-List.html"
	        },
	        
			
	        {
	            "name": "互动",
	            "sub_button": [
	                {
	                    "type": "click",
	                    "name": "问答",
	                    "key": "askAndAnwser"
	                },
	                {
	                    "type": "view",
	                    "name": "来稿说明",
	                    "url": "demo.alsovalue.com/BONZWISE/Draft-Description.html"
	                }
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
	                    "url": "demo.alsovalue.com/BONZWISE/LearningTopics.html"
	                },
	                {
	                    "type": "view",
	                    "name": "公开研讨课",
	                    "url": "demo.alsovalue.com/BONZWISE/PublicationSeminar.html"
	                },
	                {
	                    "type": "view",
	                    "name": "定制服务",
	                    "url": "demo.alsovalue.com/BONZWISE/CustomizedService.html"
	                }
	            ]
	        }
	    ]
	}';
	
	$respArr = RequestUtil::httpPost($url, $menustr, 'post');
	echo $respArr["errmsg"];
}
?>