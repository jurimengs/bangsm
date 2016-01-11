<?php /* Smarty version Smarty-3.0.7, created on 2015-10-27 02:41:01
         compiled from "G:/wamp/www//jl/templates\sysadmin/top.html" */ ?>
<?php /*%%SmartyHeaderCode:20759562ee43daf8ba2-55948028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59c00b5c00bee35eec09d529f5c61c9ba54a59ea' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\sysadmin/top.html',
      1 => 1445910469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20759562ee43daf8ba2-55948028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站管理系统 v10.12</title>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta content="yuan.dai" name="author" />
<meta content="43sj.com" name="Copyright" />
<link rel="stylesheet" href="style/top.css" type="text/css" />
<!--[if lt IE 9]>
<link href="css/common.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if lt IE 9]>  
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>  
<![endif]-->  
<script src="../jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
if (window == top) {
    top.location.href='main.php'
}
-->
</script>
</head>

<body>
    <div class="info">
        <p class="successmsg"><span style="background:#16960E; padding:5px 15px;top:0px;"></span></p>
        <p class="noticemsg"><span style="background:#FF9E19; padding:5px 15px;top:0px;"></span></p>
        <p class="errormsg"><span style="background:#DA4423; padding:5px 15px;top:0px;"></span></p>
    </div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="190" height="64" align="center" valign="top">
                <img src="images/logo.gif" />
            </td>
            <td align="left" valign="middle" class="right">
                
            	
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px;">
                  
                  <tr>
                    <td height="20" colspan="2" valign="middle">
                    <strong><?php echo $_smarty_tpl->getVariable('user_id')->value;?>
</strong>&lt;<?php echo $_smarty_tpl->getVariable('role_name')->value;?>
&gt;
                    </td>
                  </tr>
                  <tr>
                    <td width="36%" height="30" valign="top" class="green">
                    <a href="right.php" target="main">系统首页</a> |
                    <a href="../" target="_blank">浏览网站</a> |
                    <a href="mailto:2567620045@qq.com">反馈问题</a>
                        </td>
                    <td width="64%" align="right" class="nav">
                    <a href="javascript:;" id="showleft">关闭左栏</a> |
                    <a href="edit_password.php" target="main" class="hui">修改资料/密码</a> | 
                    <a href="javascript:;" onclick="top.location.href='out.php';return false;" class="hui">注销退出</a>
                    | <a href="http://www.alsovalue.com/" target="_blank" class="hui">上海翱思网络</a>
                </td>
                  </tr>
            </table></td>
        </tr>
    </table>
     
<script type="text/javascript">
    function showsuccessmsg(msg){
        $(".successmsg").fadeIn(300);
        $(".successmsg span").text(msg);
       
        setTimeout("hidesuccessmsg()", 4000);
    }
    function hidesuccessmsg(){
        $(".successmsg").fadeOut(500);
    }
    
    function shownoticemsg(msg){
        $(".noticemsg").fadeIn(300);
        $(".noticemsg span").text(msg);
       
        setTimeout("hidenoticemsg()", 4000);
    }
    function hidenoticemsg(){
        $(".noticemsg").fadeOut(500);
    }
    
    function showerrormsg(msg){
        $(".errormsg").fadeIn(300);
        $(".errormsg span").text(msg);
       
        setTimeout("hideerrormsg()", 4000);
    }
    function hideerrormsg(){
        $(".errormsg").fadeOut(500);
    }
    $(function(){
        $("#showleft").toggle(function(){
            window.parent.document.getElementById('mainframe').cols="0,*";
            $(this).text("展开左栏")
        },function(){
            window.parent.document.getElementById('mainframe').cols="180,*";
            $(this).text("关闭左栏")
        })
		return;
    })
    </script>
     
</body>
</html>
