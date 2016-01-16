<?php /* Smarty version Smarty-3.0.7, created on 2016-01-12 12:44:18
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/engage.html" */ ?>
<?php /*%%SmartyHeaderCode:1529645645569484a2de92a3-12377564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d3640711142c5115f294689996acacbd29a6727' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/engage.html',
      1 => 1452508029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1529645645569484a2de92a3-12377564',
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

    </section>

</header>
<article class="interaction">
   <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

</article>
</body>
</html>