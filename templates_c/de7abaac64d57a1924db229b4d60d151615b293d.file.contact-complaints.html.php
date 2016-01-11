<?php /* Smarty version Smarty-3.0.7, created on 2015-10-27 08:32:07
         compiled from "G:/wamp/www//jl/templates\contact-complaints.html" */ ?>
<?php /*%%SmartyHeaderCode:8447562f36873fac85-91431896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de7abaac64d57a1924db229b4d60d151615b293d' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\contact-complaints.html',
      1 => 1445934713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8447562f36873fac85-91431896',
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
<!--mainnav-->
<div class="cbanner">
    <img src="../images/contact/contact.png">
</div>
<div class="cmain">

    <div class="cmain_leftarea">
        <h2><span>联系我们</span></h2>
        <ul>
            <li class="cmain_leftarea_icon"><span></span><a href="javascript:void(0)">联系方式</a></li>
            <li><span></span><a href="javascript:void(0)">投诉建议</a></li>
            <li><span></span><a href="javascript:void(0)">招聘信息</a></li>

        </ul>

    </div>
    <div class="cmain_rightarea">
        <div class="cmain_2">
            <div class="cmain_rightarea_title">
                <h3><span></span>投诉建议</h3>
                <div class="cmain_rightarea_title_word">您的位置：首页 > 联系我们 > 投诉建议</div>
            </div>
            <div class="contact_ts">
                <div class="contact_tsleft">
               <dl>
                   <dt>姓名：</dt><dd><input type="text"></dd>
                   <dt>性别：</dt> <dd><input type="radio" name="sex"> 男&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="sex">女</dd>
                   <dt>邮箱：</dt><dd><input type="text"></dd>
                   <dt>手机：</dt><dd><input type="text"></dd>
                   <dt>投诉建议:</dt> <dd><textarea type="text"></textarea></dd>
               </dl>
                    <a href="javascript:void(0)" class="submit"> 提交</a>
                </div>
                <div class="contact_tright"><img src="../images/contact/tu2.png"></div>
            </div>

        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>