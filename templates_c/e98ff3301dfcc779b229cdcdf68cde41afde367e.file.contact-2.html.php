<?php /* Smarty version Smarty-3.0.7, created on 2015-11-09 18:58:27
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/contact-2.html" */ ?>
<?php /*%%SmartyHeaderCode:49800837956407c53c626b9-27774617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e98ff3301dfcc779b229cdcdf68cde41afde367e' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/contact-2.html',
      1 => 1447066553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49800837956407c53c626b9-27774617',
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