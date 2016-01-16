<?php /* Smarty version Smarty-3.0.7, created on 2016-01-07 13:27:16
         compiled from "F:/wamp/www//yanqi/templates\product-list.html" */ ?>
<?php /*%%SmartyHeaderCode:14764568e67b438dd82-17844551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de0f9a62f5ac1917dd6e90a22a8c1ad644909f4a' => 
    array (
      0 => 'F:/wamp/www//yanqi/templates\\product-list.html',
      1 => 1452064231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14764568e67b438dd82-17844551',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head lang="en">

    <?php if (!empty($_smarty_tpl->getVariable('tid',null,true,false)->value)){?>
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
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['par']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
                 <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['parx']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
?>
                    <?php if ($_smarty_tpl->tpl_vars['j']->value['id']==$_smarty_tpl->getVariable('tid')->value){?>
                    <title> <?php echo $_smarty_tpl->tpl_vars['j']->value['name'];?>
 | <?php if (!isset($_smarty_tpl->tpl_vars['j']) || !is_array($_smarty_tpl->tpl_vars['j']->value)) $_smarty_tpl->createLocalArrayVariable('j');
if ($_smarty_tpl->tpl_vars['j']->value['parent_id'] = $_smarty_tpl->tpl_vars['v']->value['id']){?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php }?> | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
                    <?php }?>
                 <?php }} ?>
            <?php }} ?>
        <?php endfor; endif; ?>
    <?php }else{ ?>
    <title> <?php echo $_smarty_tpl->getVariable('product_t')->value['name'];?>
 | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <?php }?>
    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</head>
<body>
<div class="product-del-one">
    <!---------------------------------------------------------------top---------------------------------------------------->
    <?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <!---------------------------------------------------------------product-banner---------------------------------------------------->
    <div class="pro-banner">
        <h3>服务器系列</h3>
        <div>满足当今数据密集型应用的强大的管理工具</div>
    </div>

    <!---------------------------------------------------------------介绍---------------------------------------------------->
 <div class="pro-mean">
     ENKITEK提供高性能，高可用性的存储解决方案，满足当今数据密集型应用的强大的管理工具。 AIC的强大，可靠和经济高效的存储解决方案，包括直接连接存储（DAS），网络附加存储（NAS），支持光纤通道（FC），串行连接SCSI（SAS）和串行ATA（ SATA）存储接口。
 </div>
    <!---------------------------------------------------------------详情---------------------------------------------------->
    <a id="pos"></a>
    <div class="cs-main group">
    <h3><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('prod2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->tpl_vars['v']->value['id']){?>
        <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

        <?php }?>
        <?php }} ?>
            </h3>
    <div class="pro-left">
    <div class="pro-left">

    <ul class="list">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <li>
            <a href="/yanqi/product/Product-Details-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html">
            <img src="../<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
">
            <div><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 </div>
            </a>
        </li>
    <?php }} ?>
</ul>
</div>
        <?php $_template = new Smarty_Internal_Template('public/right.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
    </div>
    <!---------------------------------------------------------------footer---------------------------------------------------->
    <?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
</body>
</html>