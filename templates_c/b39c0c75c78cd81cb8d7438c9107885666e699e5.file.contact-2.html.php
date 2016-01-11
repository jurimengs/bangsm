<?php /* Smarty version Smarty-3.0.7, created on 2015-10-29 09:54:13
         compiled from "G:/wamp/www//jl/templates\contact-2.html" */ ?>
<?php /*%%SmartyHeaderCode:87225631ecc5b20577-09135233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b39c0c75c78cd81cb8d7438c9107885666e699e5' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\contact-2.html',
      1 => 1446112452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87225631ecc5b20577-09135233',
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
        <div class="cmain_1">
            <?php $_template = new Smarty_Internal_Template('public/home.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            <div class="contact_fs">
                <div class="contact_fs_left">
                    <h2><?php echo $_smarty_tpl->getVariable('cont')->value['title'];?>
</h2>
                    <div class="contact_fs_leftp">
                        <img src="../images/contact/tu.png">
                        <div class="t">
                        <p ><?php echo $_smarty_tpl->getVariable('cont')->value['address'];?>
</p>
                        <p> <?php echo $_smarty_tpl->getVariable('cont')->value['zip'];?>
</p>
                        <p> <?php echo $_smarty_tpl->getVariable('cont')->value['phone'];?>
</p>
                        </div>
                    </div>
                </div>
                <div class="contact_fs_img">
                    <?php echo $_smarty_tpl->getVariable('cont')->value['contents'];?>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>