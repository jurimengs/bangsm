<?php /* Smarty version Smarty-3.0.7, created on 2016-01-08 04:33:07
         compiled from "E:/wamp/www//yanqi/templates\server.html" */ ?>
<?php /*%%SmartyHeaderCode:15335568f3c037fb347-12478310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c933aa913696f75c987c90bda56a030a7657c51' => 
    array (
      0 => 'E:/wamp/www//yanqi/templates\\server.html',
      1 => 1452225407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15335568f3c037fb347-12478310',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
 | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</head>
<body>
<div class="product-del-two">
<!---------------------------------------------------------------top---------------------------------------------------->
    <?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!---------------------------------------------------------------name---------------------------------------------------->
<div class="pro-name-warp">
    <div class="pro-name group">
        <div class="name"><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
</div>
        <!--<div><button>返回</button></div>-->
    </div>

</div>
 <!--------------------------------------------------------------详情--------------------------------------------------->
<div class="service group">
<div class="service-left">
    <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

</div>
    <?php $_template = new Smarty_Internal_Template('public/right.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
    <!---------------------------------------------------------------footer---------------------------------------------------->
    <?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
</body>
</html>