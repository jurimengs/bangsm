<?php /* Smarty version Smarty-3.0.7, created on 2015-12-30 16:11:25
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/addgroup.html" */ ?>
<?php /*%%SmartyHeaderCode:590001070568391ad430156-83815685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc9ff247c896a0c84fc1edb68a2da793b520065' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/addgroup.html',
      1 => 1451463062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '590001070568391ad430156-83815685',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form action="wxgroup.php?action=addone" method="post">
	groupname： <input name="groupname" />
	<br />
	backup：<input name="backup" />
	<br />
	<input type="submit" value="提交" />
</form>