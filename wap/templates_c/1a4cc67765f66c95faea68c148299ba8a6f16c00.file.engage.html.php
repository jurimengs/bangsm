<?php /* Smarty version Smarty-3.0.7, created on 2016-01-09 09:53:03
         compiled from "F:/wamp/www//bangsm/templates\engage.html" */ ?>
<?php /*%%SmartyHeaderCode:65935690d87fcf8673-96933614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a4cc67765f66c95faea68c148299ba8a6f16c00' => 
    array (
      0 => 'F:/wamp/www//bangsm/templates\\engage.html',
      1 => 1452330967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65935690d87fcf8673-96933614',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
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
</head>
<body>
<header>
    <section class="sw">
        <div class="log"></div>
        <a class="search"></a>
    </section>
    
    <section class="search-box">
        <div class="search-box-input"> <input type="text" value="请输入关键字" onfocus="if(value=='请输入关键字'){value=''}" onblur="if(value==''|| value==' '){ value='请输入关键字'}">
        </div>
    </section>
    
</header>
<article class="interaction">
   <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

</article>
</body>
</html>