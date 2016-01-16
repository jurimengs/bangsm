<?php /* Smarty version Smarty-3.0.7, created on 2016-01-12 17:44:48
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/news-details.html" */ ?>
<?php /*%%SmartyHeaderCode:8170101355694cb10e47758-44080643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b805f5a83b7b8c8d0f83dbea826b6996491d731' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/news-details.html',
      1 => 1452508029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8170101355694cb10e47758-44080643',
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
    
    <form method="post" action="News-List.php">
        <section class="search-box">
            <div class="search-box-input"> <input type="text" name="search" value="请输入关键字" onfocus="if(value=='请输入关键字'){value=''}" onblur="if(value==''|| value==' '){ value='请输入关键字'}"></div>
        </section>
    </form>
    
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