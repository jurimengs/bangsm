<?php /* Smarty version Smarty-3.0.7, created on 2015-12-31 15:29:41
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/pager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17425491665684d96599f1a5-74558863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c74cd7ab92be93d904e057c2eb4d5a4987b9513c' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/pager.tpl',
      1 => 1451546979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17425491665684d96599f1a5-74558863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿分页:
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['name'] = '';
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('messageArray')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['']['total']);
?>
<div>
	下一页:<div style="float: left;">ss</div>
</div>
<?php endfor; else: ?>
<?php endif; ?>