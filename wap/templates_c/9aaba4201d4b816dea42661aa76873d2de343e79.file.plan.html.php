<?php /* Smarty version Smarty-3.0.7, created on 2016-01-07 01:05:23
         compiled from "E:/wamp/www//yanqi/templates\plan.html" */ ?>
<?php /*%%SmartyHeaderCode:20723568db9d30b2259-99886463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aaba4201d4b816dea42661aa76873d2de343e79' => 
    array (
      0 => 'E:/wamp/www//yanqi/templates\\plan.html',
      1 => 1452128722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20723568db9d30b2259-99886463',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> <?php if (!empty($_smarty_tpl->getVariable('tid',null,true,false)->value)){?><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('plan')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?><?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->getVariable('plan')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?><?php echo $_smarty_tpl->getVariable('plan')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
 <?php }?><?php endfor; endif; ?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('plan_t')->value['name'];?>
<?php }?> | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</head>
<body>
    <div class="resolve">
        <!---------------------------------------------------------------top---------------------------------------------------->
        <?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <!---------------------------------------------------------------resolve-banner---------------------------------------------------->
        <div class="banner">
            <h3>
                <?php echo $_smarty_tpl->getVariable('plan_t')->value['name'];?>

            </h3>
            <div>
                <?php echo $_smarty_tpl->getVariable('plan_t')->value['description'];?>

            </div>
        </div>
        <!---------------------------------------------------------------resolve-main---------------------------------------------------->
        <div class="resolve-main">
            <div class="summary">
                <?php echo $_smarty_tpl->getVariable('plan_t')->value['contents'];?>
</div>
            <ul class="resolve-list group">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
                <a href="/yanqi/plan/Plan-Details-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html">
                <li>
                    <div class="list-t">
                        <img src="../<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
" /></div>
                    <dl>
                        <dt><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</dt>
                        <dd>
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>

                        </dd>
                    </dl>
                </li>
                </a>
                <?php }} ?>
            </ul>
            <div class="xy">

               <?php echo $_smarty_tpl->getVariable('pager')->value;?>


            </div>

        </div>
        <!---------------------------------------------------------------footer---------------------------------------------------->

        <?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
</body>
</html>
