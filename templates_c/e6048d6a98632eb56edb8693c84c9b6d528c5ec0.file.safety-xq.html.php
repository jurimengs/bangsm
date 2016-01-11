<?php /* Smarty version Smarty-3.0.7, created on 2015-12-08 05:35:18
         compiled from "E:/wamp/www//jlwy/templates\safety-xq.html" */ ?>
<?php /*%%SmartyHeaderCode:2588656666c16542a02-55226419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6048d6a98632eb56edb8693c84c9b6d528c5ec0' => 
    array (
      0 => 'E:/wamp/www//jlwy/templates\\safety-xq.html',
      1 => 1449552917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2588656666c16542a02-55226419',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'E:\wamp\www\jlwy\smarty\plugins\modifier.date_format.php';
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

<div class="cmain">
 <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <div class="cmain_rightarea">
        <div class="cmain_1">
            <div class="new_change">
                <div class="newlist_t">
                    <?php $_template = new Smarty_Internal_Template('public/home.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    <div class="safety_bk">
                        
                <div class="t_q">
                    <div class="safety_content">
                        <div class="safety_contentchange">
                            <div class="safety_left">
                                <h4><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
&nbsp;&nbsp;&nbsp;/<span><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('xiangqing')->value['time'],"%Y-%m-%d");?>
</span></h4>
                                <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

                            </div>
                        </div>
                    </div>
                    <ul class="ulback">
                        <li style="border-bottom:  1px solid #e5e5e5;">上一篇：<?php echo $_smarty_tpl->getVariable('xiangqingshang')->value;?>
<span class="news_xqback" onclick="javascript:(location.href='javascript:history.back(-1);')"></span>
                        </li>
                        <li> 下一篇：<?php echo $_smarty_tpl->getVariable('xiangqingxia')->value;?>
</li>
                    </ul>
                </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>