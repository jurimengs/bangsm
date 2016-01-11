<?php /* Smarty version Smarty-3.0.7, created on 2015-11-04 08:34:34
         compiled from "G:/wamp/www//jl/templates\conmpany-profit.html" */ ?>
<?php /*%%SmartyHeaderCode:179555639c31a0cad71-60277412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9065dc92c4f262c0890345b6136ab1125062ad0' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\conmpany-profit.html',
      1 => 1446626006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179555639c31a0cad71-60277412',
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

        <div class="cmain_2">
            <div class="cmain_rightarea_title">
                <h3><span></span>社会公益</h3>
                <div class="cmain_rightarea_title_word">您的位置：首页 > 走进嘉隆 > 社会公益</div>
            </div>
			<?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

        </div>

    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>