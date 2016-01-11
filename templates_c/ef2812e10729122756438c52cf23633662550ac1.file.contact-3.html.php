<?php /* Smarty version Smarty-3.0.7, created on 2015-11-26 15:36:01
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/contact-3.html" */ ?>
<?php /*%%SmartyHeaderCode:12054957665656b661ce4267-48202057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef2812e10729122756438c52cf23633662550ac1' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/contact-3.html',
      1 => 1448523359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12054957665656b661ce4267-48202057',
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

     <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <div class="cmain_rightarea">
        <div class="cmain_2">
            <div class="cmain_rightarea_title">
                <h3><span></span>投诉建议</h3>
                <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a>> <a href="/contact/contact.php">联系我们 > </a>投诉建议</div>
            </div>
            <div class="contact_ts">
            <form action="/contact/contact.php?whatid=3" method="post" class="jianform">
                <div class="contact_tsleft">
               <dl> 
                   <dt>姓名：</dt><dd><input type="text" name="username"></dd>
                   <dt>性别：</dt> <dd><input type="radio" name="ger" value="男" checked="true"> 男&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="ger"  value="女">女</dd>
                   <dt>邮箱：</dt><dd><input type="text" name="email"></dd>
                   <dt>手机：</dt><dd><input type="text" name="phone"></dd>
                   <dt>投诉建议:</dt> <dd><textarea type="text" name="cont"></textarea></dd>
               </dl>
               <input type="submit" value="提交"class="submit"/>
                </div>
                </form>
                <div class="contact_tright"><img src="../images/contact/tu2.png"></div>
            </div>

        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<script>
$(function() {
    var demo = $(".jianform").Validform({
        btnSubmit: "#btn_sub",
        btnReset: ".btn_reset",
        tiptype: 3,
        label: ".label",
        showAllError: false,
        ajaxPost: true,
        callback: function(data) {
            if (data.status == "1") {
                alert(data.info);
                window.location.href = '?';
            }
            else{
                alert(data.info);
            }
        },
        tiptype:function(msg,o,cssctl){

        }
    });
});
</script>
</body>
</html>