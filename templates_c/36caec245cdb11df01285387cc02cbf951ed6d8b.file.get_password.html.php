<?php /* Smarty version Smarty-3.0.7, created on 2015-12-23 21:41:00
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/get_password.html" */ ?>
<?php /*%%SmartyHeaderCode:1176074370567aa46ce844f6-85877164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36caec245cdb11df01285387cc02cbf951ed6d8b' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/get_password.html',
      1 => 1450341960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1176074370567aa46ce844f6-85877164',
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