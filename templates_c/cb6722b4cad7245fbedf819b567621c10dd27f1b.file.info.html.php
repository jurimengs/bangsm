<?php /* Smarty version Smarty-3.0.7, created on 2015-11-16 13:34:15
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/sysadmin/info.html" */ ?>
<?php /*%%SmartyHeaderCode:84668481856496ad7d92751-21859908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb6722b4cad7245fbedf819b567621c10dd27f1b' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/sysadmin/info.html',
      1 => 1446630101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84668481856496ad7d92751-21859908',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
<title>信息提示</title> 
<meta content="yuan.dai" name="author" /> 
<link rel="stylesheet" href="style/main.css" type="text/css" /> 
</head>
<body>
<div class="wrap map"> 
    <dl> 
        <dt>系统信息 >> 信息提示</dt> 
        <dd> 
            
        </dd> 
   </dl> 
</div> 

<div class="wrap">
	<p class="info_<?php echo $_smarty_tpl->getVariable('type')->value;?>
"><strong><?php echo $_smarty_tpl->getVariable('info')->value;?>
</strong><?php if ($_smarty_tpl->getVariable('type')->value!="success"){?>，
	<a href="#" onclick="javascript:history.go(-2);">点这里返回上一页</a><?php }?></p>
</div>

<div class="wrap footer"> 
    CopyRight &copy; 2006-2011  <a href="http://www.alsovalue.com/" target="_blank" class="hui">网站建设</a> ，并保留所有权利。 
</div> 
</body>
</html>