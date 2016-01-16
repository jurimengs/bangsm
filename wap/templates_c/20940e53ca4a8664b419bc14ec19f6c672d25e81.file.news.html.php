<?php /* Smarty version Smarty-3.0.7, created on 2016-01-10 06:11:51
         compiled from "F:/wamp/www//bangsm/templates\news.html" */ ?>
<?php /*%%SmartyHeaderCode:213265691f627be7319-26598169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20940e53ca4a8664b419bc14ec19f6c672d25e81' => 
    array (
      0 => 'F:/wamp/www//bangsm/templates\\news.html',
      1 => 1452406311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213265691f627be7319-26598169',
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
    <title>咨询 | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/example.css" rel="stylesheet" type="text/css">
    
    <style type="text/css">
        @media (max-width: 767px) {
            .container {
                width: auto
            }
        }

        @media (max-width: 480px) {
            .container {
                width: auto
            }
        }

        @media (min-width: 768px) and (max-width: 979px) {
            .container {
                width: 724px
            }
        }

        /* For larger displays */
        @media (min-width: 1200px) {
            .container {
                width: 1170px
            }
        }
    </style>
    
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
        <div class="search-box-input"><input type="text" value="请输入关键字" onfocus="if(value=='请输入关键字'){value=''}" onblur="if(value==''|| value==' '){ value='请输入关键字'}"></div>
    </section>
    
</header>
<section class="news">
    <div class="container">
        <div id="slides">
            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banner')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['b']->value['yuliu2'];?>
">
            <?php }} ?>
        </div>
    </div>
</section>
<article class="news_list">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
        <a href="News-List.php?tid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
            <li>
                <div class="li-con">
                <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"></div>
                <div class="new_content">
                       <h3><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h3>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>

                    </p>
                </div>
                </div>
            </li>
        </a>
        <?php }} ?>
    </ul>
</article>
</body>

<script>
    $(function(){
        $("#slides").slidesjs({
            width: 700,
            height: 350,
            start: 1,//控制从第几张图开始播放
            //控制前后按钮
            navigation:{
                active: false,//是否开启左右按钮
                effect: "slide"//触发按钮时，焦点图切换的特效，可选参数"slide"和"fade"
            }
        });
    });
</script>

</html>