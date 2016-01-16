<?php /* Smarty version Smarty-3.0.7, created on 2016-01-13 10:35:26
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/course.html" */ ?>
<?php /*%%SmartyHeaderCode:499914725695b7eec5d1d9-44501897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83eeee603d5846d8fa7466f568da384fc3963463' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/course.html',
      1 => 1452651093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '499914725695b7eec5d1d9-44501897',
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
    <title>公开引导课 | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
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
    
    <form method="post" action="Course-List.php">
        <section class="search-box">
            <div class="search-box-input"> <input type="text" name="search" value="请输入关键字" onfocus="if(value=='请输入关键字'){value=''}" onblur="if(value==''|| value==' '){ value='请输入关键字'}"></div>
        </section>
    </form>
    
</header>
<section class="c_banner">
 <img src="images/course/coursebanner.png">   
</section>
<article class="courselist">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('course_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
?>
        <a href="Course-List.php?tid=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
            <li>
               <div class="li-con">
                <img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['image'];?>
">
                   <h3><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</h3>
                   <p>
                       <?php echo mb_substr($_smarty_tpl->tpl_vars['c']->value['description'],0,30,'utf-8');?>

                   </p>
               </div>
            </li>
        </a>
        <?php }} ?>
    </ul>

</article>

</body>
</html>