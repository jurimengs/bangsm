<?php /* Smarty version Smarty-3.0.7, created on 2016-01-09 06:53:18
         compiled from "F:/wamp/www//bangsm/templates\news-details.html" */ ?>
<?php /*%%SmartyHeaderCode:155035690ae5e2cd4d4-56413514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38ae35cc30787e14f7ec2e7dd6d649c0577cdd9' => 
    array (
      0 => 'F:/wamp/www//bangsm/templates\\news-details.html',
      1 => 1452322395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155035690ae5e2cd4d4-56413514',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'F:\wamp\www\bangsm\smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
 | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/example.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.slides.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</head>
<body>
<header>
    <section class="sw">
        <div class="log"></div>
        <a class="search"></a>
    </section>
    <section class="search-box">
        <div class="search-box-input">
            
        <input type="text" value="请输入关键字" onfocus="if(value=='请输入关键字'){value=''}" onblur="if(value==''|| value==' '){ value='请输入关键字'}">
            
        </div>
    </section>
</header>
<section class="news-details">
    <div class="news_title">
 <h3>
    <?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>

</h3>
        <p>
            <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('xiangqing')->value['time'],"%Y/%m/%d");?>

        </p>
    </div>
    <article class="new_article">
      <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

    </article>
    <footer style="cursor:pointer;" onclick="self.location=document.referrer;">
        返回
    </footer>
</section>
</body>
</html>