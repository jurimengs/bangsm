<?php /* Smarty version Smarty-3.0.7, created on 2016-01-13 10:35:29
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/course-list.html" */ ?>
<?php /*%%SmartyHeaderCode:13035390635695b7f19d5e49-00381568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbed45caa6935b845220516f8de87e530e664c84' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/course-list.html',
      1 => 1452651087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13035390635695b7f19d5e49-00381568',
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
    <title><?php if (empty($_smarty_tpl->getVariable('search',null,true,false)->value)){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('course_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?><?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->tpl_vars['v']->value['id']){?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php }?><?php }} ?><?php }else{ ?><?php echo $_smarty_tpl->getVariable('search')->value;?>
<?php }?> | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
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
<section class="study-list">
    <ul>
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('list')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = (int)3;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
        <a href="Course-Details.php?id=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id'];?>
">
        <li>
            <div class="li-con">
                <div class="li-content" <?php if ($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['color']==1){?>style="color:red;"<?php }?>>
                    <?php echo mb_substr($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['title'],0,30,'utf-8');?>

                    <p class="date">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['time'],"%Y/%m/%d");?>

                    </p>
                </div>
                <div class="studyimg">
                    <img src="<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['image'];?>
">
                </div>
            </div>
        </li>
        </a>
        <?php endfor; endif; ?>
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('list')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = (int)3;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
        <a href="Course-Details.php?id=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id'];?>
">
            <li>
                <div class="li-con">
                    <p <?php if ($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['color']==1){?>style="color:red;"<?php }?>> <?php echo mb_substr($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['title'],0,60,'utf-8');?>
</p>
                    <p class="date">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['time'],"%Y/%m/%d");?>

                    </p>
                </div>
            </li>
        </a>
        <?php endfor; endif; ?>
    </ul>
</section>
</body>
</html>