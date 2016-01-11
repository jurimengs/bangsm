<?php /* Smarty version Smarty-3.0.7, created on 2015-11-25 18:46:52
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/culture-nk-xq.html" */ ?>
<?php /*%%SmartyHeaderCode:19062169815655919c091f94-73353435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac3b6eae25ce804d28835c02ad676ee96bd50aae' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/culture-nk-xq.html',
      1 => 1448448259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19062169815655919c091f94-73353435',
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
<!--mainnav-->
<div class="cbanner">
    <img src="../images/conmpany/company.png">
</div>
<div class="cmain">

<?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    
    <div class="cmain_rightarea">
        <div class="cmain_1">
        <?php $_template = new Smarty_Internal_Template('public/home.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <div class="cmain_rightarea_p">
            <p style="width:100%;height:800px;border-top:3px solid #cccccc;border:3px solid #cccccc;"><embed src="../<?php echo $_smarty_tpl->getVariable('xiangqing')->value['pdf'];?>
"  style="height:800px;width:100%;border:1px solid #cccccc;"></embed></p>
        </div>

    </div>

    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>