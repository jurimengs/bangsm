<?php /* Smarty version Smarty-3.0.7, created on 2015-11-18 16:04:11
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/culture.html" */ ?>
<?php /*%%SmartyHeaderCode:401441054564c30fb808297-40916682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '805aa16e499acd7b440fce58d687d106c306c22b' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/culture.html',
      1 => 1447833849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '401441054564c30fb808297-40916682',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
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
<div class="cbanner">
    <img src="../images/culture/culture.png">
</div>
<div class="cmain">
<?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

    <div class="cmain_rightarea">
        <div class="cmain_1">
            <?php $_template = new Smarty_Internal_Template('public/home.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            <div class="cmain_rightarea_c">
                <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

            </div>
            <?php if ($_smarty_tpl->getVariable('xiangqing')->value['image']!=''){?>
            <div class="cmain_rightarea_cimages">
                <img src="../<?php echo $_smarty_tpl->getVariable('xiangqing')->value['image'];?>
">
            </div>
            <?php }?>
        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

</body>
</html>