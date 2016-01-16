<?php /* Smarty version Smarty-3.0.7, created on 2016-01-13 10:07:25
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/sysadmin/get_password.html" */ ?>
<?php /*%%SmartyHeaderCode:1847034895695b15d444328-37557236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6285d28fb20a35d3a438ebf286470c3e5e9002fa' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/sysadmin/get_password.html',
      1 => 1452591055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1847034895695b15d444328-37557236',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>找回密码</title>
</head>
<body>
<h3>找回密码：</h3>
<form action="?action=getpassword" method="post" id="form1">
请输入邮箱：<br><br>
<input name="email" id="email" type="text" style="width:200px;" maxlength="50" />
<br><br>
<input type="submit" name="btnSubmit" value="确定" />
<br><br>
注：新密码将发送到你的邮箱!
</form>
</body>
</html>