<?php /* Smarty version Smarty-3.0.7, created on 2016-01-11 08:02:53
         compiled from "E:/wamp/www//bangsm/templates\theme.html" */ ?>
<?php /*%%SmartyHeaderCode:2422569361ad33e977-08645019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5221d5c02b77448bd87a3a8e95e9c0280f4cc3a2' => 
    array (
      0 => 'E:/wamp/www//bangsm/templates\\theme.html',
      1 => 1452330307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2422569361ad33e977-08645019',
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
    <title>学习主题 | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
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
<section class="studybanner">
<img src="images/service/theme.png">
</section>
<article class="studylist">
<ul>
    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('theme_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
?>
    <li>
        <a href="Theme-List.php?tid=<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['t']->value['image'];?>
">
        <div class="tcopy"><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
</div>
         </a>
    </li>
    <?php }} ?>
</ul>
</article>
</body>
</html>