<?php /* Smarty version Smarty-3.0.7, created on 2015-09-30 04:10:19
         compiled from "G:/wamp/www//sqs/templates\sysadmin/right.html" */ ?>
<?php /*%%SmartyHeaderCode:29396560b60ab756b36-49894287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4f9b1eb73422b90dd963633542f22dd4c078c7' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\sysadmin/right.html',
      1 => 1433804220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29396560b60ab756b36-49894287',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>系统首页</dt> 
        <dd> 
           
        </dd> 
   </dl> 
</div>

<div class="wrap"> 
<table width="100%" cellpadding="3" cellspacing="3">
  <tbody>
    <tr>    
      <th colspan="4" align="left">系统统信息</th>
    </tr>
    <tr>
      <td width="19%">服务器操作系统：</td>
      <td width="30%"><?php echo $_smarty_tpl->getVariable('sys_info')->value['os'];?>
(<?php echo $_smarty_tpl->getVariable('sys_info')->value['ip'];?>
)</td>
      <td width="19%">Web 服务器：</td>
      <td width="32%"><?php echo $_smarty_tpl->getVariable('sys_info')->value['web_server'];?>
</td>
    </tr>
    <tr>
      <td>PHP 版本：</td>
      <td><?php echo $_smarty_tpl->getVariable('sys_info')->value['php_ver'];?>
</td>
      <td>SQL 版本：</td>
      <td>5.0</td>
    </tr>
    <tr>
      <td>端口号：</td>
      <td><?php echo $_smarty_tpl->getVariable('sys_info')->value['port'];?>
</td>
      <td>文件上传的最大大小：</td>
      <td><?php echo $_smarty_tpl->getVariable('sys_info')->value['max_filesize'];?>
</td>
    </tr>
    <tr>
      <td>开发者：</td>
      <td><a href="mailto:web@alsovalue.com">翱思</a></td>
      <td>程序版本：</td>
      <td>v10<sup>+</sup></td>
    </tr>
  </tbody>
</table>
</div>
