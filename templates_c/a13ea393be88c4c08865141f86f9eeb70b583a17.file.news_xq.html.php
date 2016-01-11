<?php /* Smarty version Smarty-3.0.7, created on 2015-10-28 04:16:28
         compiled from "G:/wamp/www//jl/templates\news_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:1450356304c1cdea8d1-63610429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a13ea393be88c4c08865141f86f9eeb70b583a17' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\news_xq.html',
      1 => 1446005787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1450356304c1cdea8d1-63610429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
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
<div class="cbanner">
    <img src="../images/news/newsbanner.png">
</div>
<div class="cmain">
<?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <div class="cmain_rightarea">
        <div class="cmain_1">
           <?php $_template = new Smarty_Internal_Template('public/home.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            <div class="new_change">
            <div class="newlist_t">
            <div class="newlist">
                
            </div>
       
            </div>
            <div class="t_q">
            <h2><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
</h2>
                <p><?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>
</p>
                <div class="news_images">
                    <img src="../<?php echo $_smarty_tpl->getVariable('xiangqing')->value['image'];?>
">
                </div>
                <ul class="ulback">
                    <li style="border-bottom:  1px solid #e5e5e5;">上一篇：<?php echo $_smarty_tpl->getVariable('xiangqingshang')->value;?>
<span class="news_xqback" onclick="javascript:(location.href='javascript:history.back(-1);')"></span></li>
                    <li> 下一篇：<?php echo $_smarty_tpl->getVariable('xiangqingxia')->value;?>
</li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>