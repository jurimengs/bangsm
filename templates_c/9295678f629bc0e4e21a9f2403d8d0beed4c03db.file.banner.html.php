<?php /* Smarty version Smarty-3.0.7, created on 2015-12-08 05:44:57
         compiled from "E:/wamp/www//jlwy/templates\public/banner.html" */ ?>
<?php /*%%SmartyHeaderCode:3224756666e59c5add5-07794825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9295678f629bc0e4e21a9f2403d8d0beed4c03db' => 
    array (
      0 => 'E:/wamp/www//jlwy/templates\\public/banner.html',
      1 => 1449553474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3224756666e59c5add5-07794825',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('yemianid')->value=='conmpany'){?>
<div class="cbanner">
    <img src="../<?php echo $_smarty_tpl->getVariable('banner_conmpany')->value['image'];?>
">
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='culture'){?>
<div class="cbanner">
    <img src="../<?php echo $_smarty_tpl->getVariable('banner_culture')->value['image'];?>
">
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='news'){?>
<div class="cbanner">
    <img src="../<?php echo $_smarty_tpl->getVariable('banner_news')->value['image'];?>
">
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='building'){?>
<div class="cbanner">
    <img src="../<?php echo $_smarty_tpl->getVariable('banner_building')->value['image'];?>
">
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='business'){?>
<div class="cbanner">
    <img src="../<?php echo $_smarty_tpl->getVariable('banner_business')->value['image'];?>
">
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='safety'){?>
<div class="cbanner">
    <img src="../<?php echo $_smarty_tpl->getVariable('banner_safety')->value['image'];?>
">
</div>

<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='staff'){?>
<div class="cbanner">
    <img src="../<?php echo $_smarty_tpl->getVariable('banner_staff')->value['image'];?>
">
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='contact'){?>
<div class="cbanner">
    <img src="../<?php echo $_smarty_tpl->getVariable('banner_contact')->value['image'];?>
">
</div>

<?php }?>