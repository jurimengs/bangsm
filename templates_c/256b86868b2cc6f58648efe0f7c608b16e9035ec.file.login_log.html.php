<?php /* Smarty version Smarty-3.0.7, created on 2015-11-05 10:13:08
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/sysadmin/login_log.html" */ ?>
<?php /*%%SmartyHeaderCode:526464605563abb34dcc153-99010094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '256b86868b2cc6f58648efe0f7c608b16e9035ec' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/sysadmin/login_log.html',
      1 => 1446630102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '526464605563abb34dcc153-99010094',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/virtual/jialongwy/home/wwwroot/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>系统设置 &gt;&gt; 管理员登录日志</dt> 
        <dd> 
            <a href="login_log.php" class="link">日志信息</a> 
        </dd> 
   </dl> 
</div> 

<form action="" method="get" id="searchForm"> 
<div class="wrap title"> 
	<dl> 
    	<dt>日志信息</dt> 
        <dd>        
        <input type="text" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
" title="根据登录用户搜索" onfocus="this.value='';" /> 
        <input type="submit" name="button" id="btnSearch" value=" 搜 索 " /> 
        </dd> 
    </dl>
</div> 
</form> 
 
<div class="wrap"> 
<form method="post" action="?action=delete" id="form1"> 
  <table width="100%" cellpadding="0" cellspacing="0" class="list"> 
    <thead> 
    <tr> 
      <th><input type="checkbox" id="all" /></th> 
      <th>登录用户</th> 
      <th>登录时间</th> 
      <th>登录IP</th> 
      <th>登录描述</th> 
    </tr>  
     </thead> 
    <tbody> 
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('logList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
    <tr> 
      <td class="text-center"><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->getVariable('logList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" /></td> 
      <td class="text-center"><?php echo $_smarty_tpl->getVariable('logList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['user_id'];?>
</td> 
      <td class="text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('logList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['time'],"%Y/%m/%d %T");?>
</td> 
      <td class="text-center"><?php echo $_smarty_tpl->getVariable('logList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['ip'];?>
</td> 
      <td class="text-center"><?php echo $_smarty_tpl->getVariable('logList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['contents'];?>
</td> 
    </tr> 
    <?php endfor; else: ?>
    <tr>
        <td colspan="5"><div class="notext">没息</div></td>
    </tr>
    <?php endif; ?>
    
  
     </tbody> 
    </table> 
 	
    <div class="page"> 
        <dl> 
            <dt><input type="submit" name="btnDelete" value="删除" onclick="return listDelete(this.form.name);" id="btnDelete" /></dt> 
            <dd> 
            <?php echo $_smarty_tpl->getVariable('pager')->value;?>
       
			</dd> 
        </dl> 
    </div> 
         
</form> 
<div class="desc">* 记录所有用户的登录日志,可进行批量删除</div> 
</div> 
