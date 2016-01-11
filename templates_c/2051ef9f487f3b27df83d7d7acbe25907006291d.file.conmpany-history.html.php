<?php /* Smarty version Smarty-3.0.7, created on 2015-10-28 01:46:07
         compiled from "G:/wamp/www//jl/templates\conmpany-history.html" */ ?>
<?php /*%%SmartyHeaderCode:19520563028dfe531e5-03986771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2051ef9f487f3b27df83d7d7acbe25907006291d' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\conmpany-history.html',
      1 => 1445996719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19520563028dfe531e5-03986771',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</head>
<body>
<?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!--mainnav-->
<div class="cbanner">
    <img src="../images/conmpany/company.png">
</div>
<div class="cmain">

     <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <div class="cmain_rightarea">
        <div class="cmain_3">
            <div class="cmain_rightarea_title">
                <h3><span></span>发展历程</h3>
                <div class="cmain_rightarea_title_word">您的位置：首页 > 走进嘉隆 > 发展历程</div>
            </div>
         <img src="../<?php echo $_smarty_tpl->getVariable('xiangqing')->value['image'];?>
" class="c_fz">
        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>