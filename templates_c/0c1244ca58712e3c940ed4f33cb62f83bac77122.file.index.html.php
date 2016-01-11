<?php /* Smarty version Smarty-3.0.7, created on 2015-10-29 06:18:27
         compiled from "G:/wamp/www//jl/templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:233785631ba33772188-54805649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c1244ca58712e3c940ed4f33cb62f83bac77122' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\index.html',
      1 => 1446099506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233785631ba33772188-54805649',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'G:\wamp\www\jl\smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</head>
<body>
<?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!--mainnav-->
<div class="banner" id="banner">
    <div class="wreaper">
        <ul class="banner_ul">
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('index_banner')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <li><img src="<?php echo $_smarty_tpl->getVariable('index_banner')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
">
                <div class="banner_word">
                    <?php echo $_smarty_tpl->getVariable('index_banner')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents'];?>
11
                </div>
            </li>
         <?php endfor; endif; ?>   

        </ul>
        <ul class="banner_ul_a2">
         <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('index_banner')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <li></li>
         <?php endfor; endif; ?>   
        </ul>
    </div>
</div>
<!--banner-->
<div class="main">
    <div class="wreaper">
        <div class="f1">
            <div class="f1_left">
                <div class="main_title"><span class="main_title_span"></span><span class="main_title_span2">公司简介</span>
                </div>
                <p><?php echo mb_substr(trim($_smarty_tpl->getVariable('jianjie')->value['contents']),0,60,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('jianjie')->value['contents'])>100){?>...<?php }?></p>
                <span class="f1_icon"></span>
            </div>
            <div class="f1_right">
                <div class="main_title"><span class="main_title_span"></span><span class="main_title_span2">新闻中心</span>
                </div>
                <ul class="f1_right_ul1">
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('index_news')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                    <li><a href="/jl/news/news_xq.php?whatid=<?php echo $_smarty_tpl->getVariable('index_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('index_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo mb_substr(trim($_smarty_tpl->getVariable('index_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']),0,25,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('index_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'])>25){?>...<?php }?></a><span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('index_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time'],"%Y-%m-%d");?>
</span></li>
                <?php endfor; endif; ?>    
                </ul>
                <ul class="f1_right_ul2">
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('index_news')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                <a href="/jl/news/news_xq.php?whatid=<?php echo $_smarty_tpl->getVariable('index_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('index_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
                    <li><img src="<?php echo $_smarty_tpl->getVariable('index_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
">
                        <h3><a href="javascript:void(0);"><?php echo mb_substr(trim($_smarty_tpl->getVariable('index_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']),0,10,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('index_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'])>20){?>...<?php }?></a></h3>
                  </li>
                </a>  
                 <?php endfor; endif; ?> 
                    
                    <div class="f1_right_ul2_hover">
                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('index_news')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                        <a href="javascript:void(0);"></a>
                    <?php endfor; endif; ?>     
                    </div>
                </ul>
            </div>
        </div>
        <!--f1-->
        <div class="f2">
            <div class="f2_left">
                <div class="f2_left_top">
                    <div class="f2_left_top_left">
                        <div class="main_title"><span class="main_title_span"></span><span
                                class="main_title_span2">党建工作</span>
                        </div>
                       <a href="/jl/building/building_xq.php?whatid=<?php echo $_smarty_tpl->getVariable('index_building')->value['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('index_building')->value['id'];?>
">  <h3 class="f2_left_title">  <?php echo $_smarty_tpl->getVariable('index_building')->value['title'];?>
</h3></a>
                        <a href="/jl/building/building_xq.php?whatid=<?php echo $_smarty_tpl->getVariable('index_building')->value['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('index_building')->value['id'];?>
" style="color:#000;"><p><?php echo mb_substr(trim($_smarty_tpl->getVariable('index_building')->value['contents']),0,200,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('index_building')->value['contents'])>200){?>...<?php }?></p></a>
                    </div>
                    <div class="f2_left_top_right">
                        <div class="main_title"><span class="main_title_span"></span><span
                                class="main_title_span2">安全管理</span>
                        </div>
                        <div class="f2_left_top_right_wraper">
                            <img src="<?php echo $_smarty_tpl->getVariable('index_safety')->value['image'];?>
" style="width:143px; height:89px;">

                            <div>
                                <a href="/jl/safety/safety-xq.php?whatid=<?php echo $_smarty_tpl->getVariable('index_safety')->value['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('index_safety')->value['id'];?>
"><h3 class="f2_left_title2"><?php echo $_smarty_tpl->getVariable('index_safety')->value['title'];?>
</h3></a>
                                <p><a href="/jl/safety/safety-xq.php?whatid=<?php echo $_smarty_tpl->getVariable('index_safety')->value['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('index_safety')->value['id'];?>
" style="color:#000;"><?php echo mb_substr(trim($_smarty_tpl->getVariable('index_safety')->value['contents']),0,150,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('index_safety')->value['contents'])>200){?>...<?php }?></a>
                                <a href="/jl/safety/safety.php?whatid=3" class="index_duo"> 更多</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--f2_left_top-->
                <div class="f2_left_bottom">
                    <div class="main_title1"><span class="main_title_span"></span><span
                            class="main_title_span2">项目展示</span>
                    </div>
                    <div class="scroll">
                        <ul class="scroll_ul">
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('index_show')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                        
                            <li>
                            <a href="<?php echo $_smarty_tpl->getVariable('index_show')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
">
                          		 <img src="<?php echo $_smarty_tpl->getVariable('index_show')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
">
                                <h3><?php echo $_smarty_tpl->getVariable('index_show')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</h3>
                             </a>   
                            </li>
                         
                         <?php endfor; endif; ?>   
                          
                        </ul>
                        <a href="javascript:void(0);" class="scroll_ul_next"></a>
                        <a href="javascript:void(0);" class="scroll_ul_prev"></a>
                    </div>
                </div>
            </div>
            <!--f2_left-->
            <div class="f2_right">
                <fieldset>
                    <legend align="center">
                        <div class="main_title2"><span class="main_title_span"></span><span
                                class="main_title_span2">企业内刊</span>
                        </div>
                    </legend>
                    <div class="f2-right-images">
                        <a href="/jl/culture/culture_nk_xq.php?whatid=<?php echo $_smarty_tpl->getVariable('index_nk')->value['id'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('index_nk')->value['image'];?>
" style="width:165px;height:150px;"></a>
                        </li>
                    </div>
                    <div class="f2-right-video">
                        <div class="main_title2"><span class="main_title_span"></span><span
                                class="main_title_span2">嘉隆物业</span>
                        </div>
                         <object class="videos" id="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                                 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
                                 width="164" height="98">
                             <param name="movie" value="flvplayer.swf">
                             <param name="quality" value="high">
                             <param name="allowFullScreen" value="true">
                             <param name="FlashVars"
                                    value="vcastr_file=<?php echo $_smarty_tpl->getVariable('index_video')->value['ziliao'];?>
&LogoText=www.lanrentuku.com&BufferTime=3&IsAutoPlay=0">
                             <embed class="videos1" src="flvplayer.swf" allowfullscreen="true"
                                    flashvars="vcastr_file=<?php echo $_smarty_tpl->getVariable('index_video')->value['ziliao'];?>
&LogoText=www.lanrentuku.com&IsAutoPlay=0" quality="high"
                                    pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"
                                    width="164" height="98"></embed>
                         </object>
                        <!--<video width="164" height="98" controls>
                            <source src="http://www.tarsus.cn/hw_420693.mp4" type="video/mp4">
                        </video>-->
                    </div>
                </fieldset>
            </div>
        </div>
        <!--f2-->


    </div>
    <!--wreaper-->
</div>
<!--main-->
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>