<?php /* Smarty version Smarty-3.0.7, created on 2015-12-08 05:12:51
         compiled from "E:/wamp/www//jlwy/templates\conmpany-struct.html" */ ?>
<?php /*%%SmartyHeaderCode:12779566666d3c29de8-52504457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef27330e3be0edbcd09673ae603ac43f266c8618' => 
    array (
      0 => 'E:/wamp/www//jlwy/templates\\conmpany-struct.html',
      1 => 1449551566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12779566666d3c29de8-52504457',
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
<?php $_template = new Smarty_Internal_Template('public/banner.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="cmain">

     <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    
    <div class="cmain_rightarea">

        <div class="cmain_2">
        
            <?php $_template = new Smarty_Internal_Template('public/home.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            
            <div class="cmain_rightarea_p">
            <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

        </div>
        <div class="cmain_rightarea_images">
            <img src="../<?php echo $_smarty_tpl->getVariable('xiangqing')->value['image'];?>
">
        </div>
        </div>


    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>