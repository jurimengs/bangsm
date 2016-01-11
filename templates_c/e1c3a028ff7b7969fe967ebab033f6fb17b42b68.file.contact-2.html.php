<?php /* Smarty version Smarty-3.0.7, created on 2015-12-08 05:45:33
         compiled from "E:/wamp/www//jlwy/templates\contact-2.html" */ ?>
<?php /*%%SmartyHeaderCode:2222156666e7df2f8c8-94564731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1c3a028ff7b7969fe967ebab033f6fb17b42b68' => 
    array (
      0 => 'E:/wamp/www//jlwy/templates\\contact-2.html',
      1 => 1449553503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2222156666e7df2f8c8-94564731',
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
<?php $_template = new Smarty_Internal_Template('public/banner.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
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
                         <p> <?php echo $_smarty_tpl->getVariable('cont')->value['email'];?>
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