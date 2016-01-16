<?php /* Smarty version Smarty-3.0.7, created on 2016-01-06 09:29:46
         compiled from "E:/wamp/www//yanqi/templates\product-details.html" */ ?>
<?php /*%%SmartyHeaderCode:26679568cde8a4ffd64-77576711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1bb60ada7b215e0ddcc2326d5d9666748e715e' => 
    array (
      0 => 'E:/wamp/www//yanqi/templates\\product-details.html',
      1 => 1452072568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26679568cde8a4ffd64-77576711',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head lang="en">
    <title> <?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
 | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>

    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</head>
<body>
<div class="product-del-two">
    <!---------------------------------------------------------------top---------------------------------------------------->
    <?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <!---------------------------------------------------------------name---------------------------------------------------->
<div class="pro-name-warp">
<div class="pro-name group">
<div class="name"><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
</div>
<div><button style="cursor:pointer;" onclick="self.location=document.referrer;">返回</button></div>
</div>

</div>
    <!---------------------------------------------------------------主要内容---------------------------------------------------->
    <?php $_smarty_tpl->tpl_vars['gd'] = new Smarty_variable(substr($_smarty_tpl->getVariable('xiangqing')->value['pimage'],1,mb_strlen($_smarty_tpl->getVariable('xiangqing')->value['pimage'])), null, null);?>
    <?php $_smarty_tpl->tpl_vars['gd'] = new Smarty_variable(explode(',',$_smarty_tpl->getVariable('gd')->value), null, null);?>
    <?php $_smarty_tpl->tpl_vars['gd'] = new Smarty_variable(array_filter($_smarty_tpl->getVariable('gd')->value), null, null);?>
<div class="xq group">
<div class="del-left">
    <div class="group">

       <div class="big-tp">
        <img src="../images/pro-mian1.jpg">
      </div>



<ul class="small-tp">


    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gd')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
?>
    <li><img src="../<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></li>
    <?php }} ?>
</ul>
        </div>

<h3>产品描述</h3>
<div class="font-pro fff"><?php echo $_smarty_tpl->getVariable('xiangqing')->value['description'];?>
</div>
<div class="qh">
<div ><a class="qh-btn">规格参数 </a><a class="qh-btn" style="background: #f1f1f1;">可选配件</a><a class="qh-btn" style="background: #f1f1f1;">下载资源</a></div>
<div>
 <div class="show-t"><img src="../images/table.jpg"></div>
 <div class="show-t" style="display: none;">2</div>
 <div class="show-t" style="display: none;">
     <ul>
         <li><a class="office">文件</a><a class="down">下载</a></li>
         <li><a class="office">文件</a><a class="down">下载</a></li>
         <li><a class="office">文件</a><a class="down">下载</a></li>
         <li><a class="office">文件</a><a class="down">下载</a></li>
         <li><a class="office">文件</a><a class="down">下载</a></li>
         <li><a class="office">文件</a><a class="down">下载</a></li>
     </ul>
 </div>



</div>
 </div>
</div>
    <?php $_template = new Smarty_Internal_Template('public/right.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>
</div>
<!---------------------------------------------------------------footer---------------------------------------------------->
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</div>


</body>
</html>