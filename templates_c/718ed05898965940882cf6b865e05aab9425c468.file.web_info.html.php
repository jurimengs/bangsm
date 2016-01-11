<?php /* Smarty version Smarty-3.0.7, created on 2015-12-14 02:34:16
         compiled from "E:/wamp/www//huizhan/templates\sysadmin/web_info.html" */ ?>
<?php /*%%SmartyHeaderCode:29464566e2aa88c7ee5-97244218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '718ed05898965940882cf6b865e05aab9425c468' => 
    array (
      0 => 'E:/wamp/www//huizhan/templates\\sysadmin/web_info.html',
      1 => 1446601260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29464566e2aa88c7ee5-97244218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>系统设置 &gt;&gt; 基本设置</dt> 
        <dd> 
        </dd> 
   </dl> 
</div> 

<?php if ($_smarty_tpl->getVariable('action')->value==''){?>
<div class="wrap title"> 
	<dl> 
    	<dt>基本设置</dt> 
        <dd>        
        </dd> 
    </dl>
</div> 

<div class="wrap">
<form id="form1" name="form1" method="post" action="?action=edit"> 
<table class="add">
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('webinfo')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<th><?php echo $_smarty_tpl->getVariable('webinfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
：</th>
	<td>
    <?php if ($_smarty_tpl->getVariable('webinfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['type']=="input"){?>
    <input name="<?php echo $_smarty_tpl->getVariable('webinfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['filed'];?>
" maxlength="50" type="text" class="input" id="<?php echo $_smarty_tpl->getVariable('webinfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['filed'];?>
" style="width:400px;" value="<?php echo $_smarty_tpl->getVariable('webinfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['value'];?>
" /> 
    <?php }else{ ?>
    <textarea style=" width:79%; height:50px;" name="<?php echo $_smarty_tpl->getVariable('webinfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['filed'];?>
" class="input" id="<?php echo $_smarty_tpl->getVariable('webinfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['filed'];?>
"><?php echo $_smarty_tpl->getVariable('webinfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['value'];?>
</textarea>
    <?php }?>
    <span><?php echo $_smarty_tpl->getVariable('webinfo')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['description'];?>
</span>
    </td>
</tr>
<?php endfor; endif; ?>
<tr>
	<th></th>
	<td><input name="btnSubmit" type="submit" id="btnSubmit" value="确定" /></td>
</tr>
</table>
</form> 
</div> 

<?php }?>
