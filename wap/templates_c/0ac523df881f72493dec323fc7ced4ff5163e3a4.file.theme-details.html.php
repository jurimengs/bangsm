<?php /* Smarty version Smarty-3.0.7, created on 2016-01-12 17:45:24
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/theme-details.html" */ ?>
<?php /*%%SmartyHeaderCode:20711002595694cb342cccd8-01273750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac523df881f72493dec323fc7ced4ff5163e3a4' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/theme-details.html',
      1 => 1452508033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20711002595694cb342cccd8-01273750',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/virtual/bangmaisiw/home/wwwroot/wap/smarty/plugins/modifier.date_format.php';
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
    
    <form method="post" action="Theme-List.php">
        <section class="search-box">
            <div class="search-box-input"> <input type="text" name="search" value="请输入关键字" onfocus="if(value=='请输入关键字'){value=''}" onblur="if(value==''|| value==' '){ value='请输入关键字'}"></div>
        </section>
    </form>
    
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