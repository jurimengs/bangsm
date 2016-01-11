<?php /* Smarty version Smarty-3.0.7, created on 2015-10-10 10:05:26
         compiled from "G:/wamp/www//sqs/templates\aa.html" */ ?>
<?php /*%%SmartyHeaderCode:241605618e2e6146668-07360624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb2d8ea8d8bab9017bccd1619417b6f2cae35aa9' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\aa.html',
      1 => 1444471523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241605618e2e6146668-07360624',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>index</title>
</head>
<style>
#if{
	width:40%; 
	height:500px;
}
</style>
<body>

<div id="dis_video">

</div>

 <!-- <iframe id="if" src="http://bbs.csdn.net/forums/WebDevelop" frameborder="0" scrolling="no"  class="class="con-right""  style="margin-left: 400px;"></iframe> -->
  <div style="width:540px;height:668px;overflow:hidden;">
	<iframe src="http://bbs.csdn.net/forums/WebDevelop" style="position:relative;top:-410px;left:-200px;width:1000px;height:9999px;"></iframe>
  </div>
  <script>
  function show_video(video_url){
	  var objs = "";
	  objs += "<OBJECT id=article_media WIDTH=500px HEIGHT=400px CLASSID=CLSID:22D6f312-B0F6-11D0-94AB-0080C74C7E95";
	  objs += " CODEBASE=;nsmp2inf.cab#Version=6,4,5,715 STANDBY=Loading Microsoft  Windows Media  Player components... TYPE=audio/mpeg$amp;>quot;$;
	  objs += "<PARAM NAME=FileName VALUE='../videos/"+video_url+"'$amp;>quot;$;
	  objs += "<PARAM NAME=ShowControls VALUE=true$amp;>quot;$;
	  objs += "<PARAM NAME=AutoRewind VALUE=true$amp;>quot;$;
	  objs += "<PARAM NAME=ShowStatusBar VALUE=1$amp;>quot;$;
	  objs += "<PARAM NAME=AutoStart VALUE=1$amp;>quot;$;
	  objs += "</OBJECT$amp;>quot;$;
	  objs += "<p>关闭</p$amp;>quot;$;
	   $("#dis_video").html(objs);
	   
	   $("#dis_video").css({  
	    "display": "block",
	    "position": "absolute", 
	    "width": 500,  
	    "height": 440,
	    "top": (document.documentElement.clientHeight-440)/2+$(document).scrollTop(),  
	    "left": (document.documentElement.clientWidth-500)/2  
	   });

	  $('#dis_video').toggle(500, function(){
	  $(this).slideDown(500);
	  });

	  $("#dis_video p").click(function(){
	    $("#dis_video").html();
	    $("#dis_video").empty();
	    $("#dis_video").hide(500);
	  });

	  }
  </script>
</body>
</html>
