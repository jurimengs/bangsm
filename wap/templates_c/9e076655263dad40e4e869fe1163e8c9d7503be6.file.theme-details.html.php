<?php /* Smarty version Smarty-3.0.7, created on 2016-01-11 02:41:33
         compiled from "E:/wamp/www//bangsm/templates\theme-details.html" */ ?>
<?php /*%%SmartyHeaderCode:295235693165d232283-20093159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e076655263dad40e4e869fe1163e8c9d7503be6' => 
    array (
      0 => 'E:/wamp/www//bangsm/templates\\theme-details.html',
      1 => 1452417576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295235693165d232283-20093159',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'E:\wamp\www\bangsm\smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="target-densitydpi=device-dpi, width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
 | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/example.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.slides.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="jquery/Validform_v5.3.2_min.js"></script>
    <script type="text/javascript" src="jquery/Validform_Datatype.js"></script>

</head>
<body>
<header>
    <section class="sw">
        <div class="log"></div>
        <a class="search"></a>
    </section>
    
    <section class="search-box">
        <div class="search-box-input"><input type="text" value="请输入关键字" onfocus="if(value=='请输入关键字'){value=''}" onblur="if(value==''|| value==' '){ value='请输入关键字'}">
        </div>
    </section>
    
</header>
<section class="studydetails-title">
    <p><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
</p>

    <p class="date">
        <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('xiangqing')->value['time'],"%Y/%m/%d");?>

    </p>
</section>
<article class="study-content">
    <section>
        <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

    </section>
    <?php $_template = new Smarty_Internal_Template("form.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</article>
</body>
</html>