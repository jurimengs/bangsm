<?php /* Smarty version Smarty-3.0.7, created on 2016-01-07 12:40:12
         compiled from "D:/wamp/www/yanqi/templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:15691568e5cace2cd07-22323451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f20e7478b73d6d543465528a154c328d74ffd009' => 
    array (
      0 => 'D:/wamp/www/yanqi/templates\\index.html',
      1 => 1452170412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15691568e5cace2cd07-22323451',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</head>
<body>
<div>
    <!---------------------------------------------------------------top---------------------------------------------------->
    <div class="top-warp">
        <div class="top group">
            <div><input  class="search-top"></div>
            <a href="index.html">
                <div class="top-left">
                    <a><img src="images/logo.jpg"></a>
                    <a class="name">岩齐科技<span> &nbsp;|&nbsp;</span></a>
                    <a class="title">ENKITEK 开放智联 融合进化</a>
                </div>
            </a>
            <div class="top-right">
            <ul class="nav">
                <a href="/yanqi/product/Product.php"><li><?php echo $_smarty_tpl->getVariable('product_t')->value['name'];?>
</li></a>
                <a href="/yanqi/plan/Plan.html"><li><?php echo $_smarty_tpl->getVariable('plan_t')->value['name'];?>
</li></a>
                <a href="/yanqi/service/Service.html"><li><?php echo $_smarty_tpl->getVariable('server_t')->value['name'];?>
</li></a>
                <a href="/yanqi/technology/Download.html"><li><?php echo $_smarty_tpl->getVariable('technology_t')->value['name'];?>
</li></a>
                <a href="/yanqi/about/About.html"><li><?php echo $_smarty_tpl->getVariable('abouts_t')->value['name'];?>
</li></a>
                <a href="/yanqi/contact/Contact.html"><li><?php echo $_smarty_tpl->getVariable('contact_t')->value['name'];?>
</li></a>
            </ul>
           <div class="menu-nav"  style="display: none;">
           <ul>
               <li style=" width: 343px;">
                   <h3><a> &nbsp <?php echo $_smarty_tpl->getVariable('product_t')->value['name'];?>
</a></h3>
                   <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('product')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>

                   <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['last']=='true'){?>
                   <dl style="margin-top: 35px;">
                       <dt><img src="images/menu.jpg"> <a><?php echo $_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></dt>
                   </dl>
                   <?php }else{ ?>
                   <dl>
                       <dt><img src="images/menu.jpg"> <a><?php echo $_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></dt>
                       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['par']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
                       <?php if ($_smarty_tpl->tpl_vars['v']->value['parent_id']==$_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>
                       <dd><a><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></dd>
                       <?php }?>
                       <?php }} ?>
                   </dl>
                    <?php }?>
                   <?php endfor; endif; ?>

               </li>
               <li>
                   <h3><a><?php echo $_smarty_tpl->getVariable('plan_t')->value['name'];?>
</a></h3>
                   <dl>
                       <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?>
                        <dt><a>&nbsp <?php echo $_smarty_tpl->getVariable('plan')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></dt>
                       <?php endfor; endif; ?>

                   </dl>

               </li>
               <li>
                   <h3><a><?php echo $_smarty_tpl->getVariable('server_t')->value['name'];?>
</a></h3>
                   <dl>
                       <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('server')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
                       <dt><a>&nbsp <?php echo $_smarty_tpl->getVariable('server')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></dt>
                       <?php endfor; endif; ?>
                   </dl>
               </li>
               <li>
                   <h3><a><?php echo $_smarty_tpl->getVariable('technology_t')->value['name'];?>
</a></h3>
                   <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('technology')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
                   <dl>
                       <dt><img src="images/menu.jpg"> <a><?php echo $_smarty_tpl->getVariable('technology')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></dt>
                       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('technology')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['par']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
                       <?php if ($_smarty_tpl->tpl_vars['v']->value['parent_id']==$_smarty_tpl->getVariable('technology')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>
                       <dd><a><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></dd>
                       <?php }?>
                       <?php }} ?>
                   </dl>
                   <?php endfor; endif; ?>
               </li>
               <li >
                   <h3><a><?php echo $_smarty_tpl->getVariable('abouts_t')->value['name'];?>
</a></h3>
                   <dl>
                       <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('abouts')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
                       <dt><a>&nbsp <?php echo $_smarty_tpl->getVariable('abouts')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></dt>
                       <?php endfor; endif; ?>
                   </dl>
               </li>
               <li style="border-right:none;"> <h3><?php echo $_smarty_tpl->getVariable('contact_t')->value['name'];?>
</a></h3>
                    <dl>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('contact')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
                        <dt><a>&nbsp <?php echo $_smarty_tpl->getVariable('contact')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></dt>
                        <?php endfor; endif; ?>
                    </dl>
               </li>



           </ul>
           </div>
            </div>
        </div>
    </div>
    <!---------------------------------------------------------------banner---------------------------------------------------->
    <div class="index">
        <div class='bzBanner'>
            <div class='content'>
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('banner')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
                <div class='col'>
                    <a href='javascript:;' >
                        <img src='./<?php echo $_smarty_tpl->getVariable('banner')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['yuliu2'];?>
'style="width: 100%; height: 500px;" />

							<div class="qk">
                                <h3><?php echo $_smarty_tpl->getVariable('banner')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</h3>
                                <div>为国家公共安全信息平台以及数据中心，提供成熟的系统</br>化产品和应用方案</div>
                                <div><button onclick="javascript:location.href='<?php echo $_smarty_tpl->getVariable('banner')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
';">Learn more</button></div>
                            </div>
                    </a>
                </div>
                <?php endfor; endif; ?>
            </div>
           <!-- <div class='btn'><i></i><i></i><i></i><i></i></div>-->
            <div class="banner-btn" ><span class="pre"><img src="images/left.png" /></span><span class="next"><img src="images/right.png" /></span></div>
        </div>
        </div>
    </div>
   <div class="siteinfo"><!--网站信息-->

       <div class="box">
           <div class="t_news">
               <b><img src="images/siteinfo.png" style="vertical-align: top;"></b>
               <ul class="news_li">
                   <li><a href="" target="_blank"> 一家致力于公共安全运维系统和可视化信息平台建设的技术公司<span class="time">2015/10/30</span></a></li>
                   <li><a href="" target="_blank"> 一家致力于公共安全运维系统和可视化信息平台建设的技术公司<span class="time">2015/10/30</span></a></li>
                   <li><a href="" target="_blank"> 一家致力于公共安全运维系统和可视化信息平台建设的技术公司<span class="time">2015/10/30</span></a></li>
                   <li><a href="" target="_blank"> 一家致力于公共安全运维系统和可视化信息平台建设的技术公司<span class="time">2015/10/30</span></a></li>
                   <li><a href="" target="_blank"> 一家致力于公共安全运维系统和可视化信息平台建设的技术公司<span class="time">2015/10/30</span></a></li>
               </ul>
               <ul class="swap"></ul>
           </div>
       </div>
   </div>
    <!---------------------------------------------------------------摘要---------------------------------------------------->
<div class="summary">
<div class="summary-one"><span>基础架构＋垂直应用＋互联平台</span>  一体化生态链作为岩齐人的愿景</div>
<div class="summary-two">岩齐科技从架构即服务（Iaas），软件即服务（Saas），平台即服务（Paas）三个维度整合方案，为上百个城市安保中心、智能楼宇、无人值守酒店、道路交通、金融银行等项目提供稳定无虞的产品和先进解决方案。</div>
</div><!--摘要-->
    <!---------------------------------------------------------------main---------------------------------------------------->
<div class="main-warp">
<h3>产品与方案</h3>
<div class="tips">由方案衍生出9个产品驱动引擎，并不断研究，追求突破 。</div>
<div class="main">
<ul>
<li>
    <img src="images/mian-li1.jpg">
<dl>
    <dt>互联平台</dt>
    <dd>为行业客户解基础架构我们的业务涵盖IT基础架构、视频安保系统、全息数字管理，、视频安保系统、全息数字管理，为行业客户解决数据爆炸、算力枯竭决数据爆炸、算力枯竭</dd>
</dl>
    <div class="tips-net"><img src="images/net.jpg">互联平台提高了工作效率</div>
</li>
<li>
    <img src="images/main-li2.jpg">
    <dl>
        <dt>安保运维</dt>
        <dd>涵盖IT基础架构我们的业务、视频安保系统、全息数字管理，为行业客户解基础架构、视频安保系统、全息数字管理</dd>
    </dl>
    <div class="tips-net"><img src="images/net.jpg">安保运维为您保驾护航</div>

</li>
<li>
    <img src="images/main-li3.jpg">
    <dl>
        <dt>基础架构</dt>
        <dd>我们的业务涵盖基础架构、视频安保我们的业务涵盖系统、全息数字管理，为行业客户解基础架构、视频安保系统、全息数字管理，为行业客户解决数据爆炸竭决数据爆炸</dd>
    </dl>
    <div class="tips-net"><img src="images/net.jpg">系统工作原理</div>

</li>
</ul>
</div>
</div>
    <!---------------------------------------------------------------help---------------------------------------------------->
<div class="help-warp">
    <div class="help">
<h3>需要更多帮助</h3>
<ul>
<li>
    <div><img src="images/dh.jpg"></div>
    <dl>
        <dt>培训预约</dt>
        <dd>您将得到最尊贵的VIP式培训服务，只需您提前与我们预约</dd>
    </dl>

</li>
<li>
    <div><img src="images/dd.jpg"></div>
    <dl>
        <dt>致电客服中心</dt>
        <dd>我们的团队为您提供7*8小时服务，欢迎您来电咨询相关业务</dd>
    </dl>

</li>
<li>
    <div><img src="images/zx.jpg"></div>
    <dl>
        <dt>在线技术支持</dt>
        <dd>在我们的技术中心，为您准备了丰富的资料，您可以通过查询或下载来了解</dd>
    </dl>
</li>

</ul>
</div>
</div>
    <!---------------------------------------------------------------footer---------------------------------------------------->

<div class="footer-warp">
<div class="footer-one group">
<ul>
    <li>
        <dl>
            <dt>产品  </dt>
            <dd>基础架构</dd>
            <dd>安保运维</dd>
            <dd>互联平台</dd>
        </dl>

    </li>
    <li>
        <dl>
            <dt> 解决方案 </dt>
            <dd>技术方案</dd>
            <dd>成功案例</dd>
        </dl>

    </li>
    <li>
        <dl>
            <dt>  服务</dt>
            <dd>产品认证</dd>
            <dd>技术培训</dd>
        </dl>


    </li>
    <li>
        <dl>
            <dt>技术支持</dt>
            <dd>下载中心</dd>
            <dd>知识经验</dd>
        </dl>
    </li>
    <li>

        <dl>
            <dt>关于岩齐</dt>
            <dd>企业介绍</dd>
            <dd>企业文化</dd>
            <dd>企业商标</dd>
            <dd>合作伙伴</dd>
            <dd>企业新闻</dd>
        </dl>
    </li>
    <li>
        <dl>
            <dt>联系我们</dt>
            <dd>联系方式</dd>
            <dd>公共媒体</dd>
            <dd>企业招聘</dd>
        </dl>

    </li>

</ul>
<div class="care">
    <img src="images/ewm.jpg">
   <div>关注我，拍我</div>
</div>
</div>
    <div class="footer-two-warp">
<div class="footer-two">
    Copyright © 2015 enkitek.cn   Powered by Alsovalue
    <span style="margin-left: 658px;">Follow ENKITEK  <img src="images/wx.jpg"><img src="images/wb.jpg"></span>
</div>
        <div class="back" id='rtt' style="display: none;"></div>
    </div>
</div>

</div>

</body>
</html>