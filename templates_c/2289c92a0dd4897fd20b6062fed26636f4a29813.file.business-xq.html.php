<?php /* Smarty version Smarty-3.0.7, created on 2015-11-12 19:33:35
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/business-xq.html" */ ?>
<?php /*%%SmartyHeaderCode:3180383825644790f814cb5-09168905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2289c92a0dd4897fd20b6062fed26636f4a29813' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/business-xq.html',
      1 => 1447328013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3180383825644790f814cb5-09168905',
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
    <img src="../images/businness/businessbanner.png">
</div>
<div class="cmain">
     <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <div class="cmain_rightarea">
    
         <?php $_template = new Smarty_Internal_Template('public/home.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

        <div class="t_q1">
        
            <div class="tchange1 tchangeitm">
                <div class="anto_image">
                    <img src="../<?php echo $_smarty_tpl->getVariable('xiangqing')->value['image'];?>
" style="width:570px;height:481px;">
                    <h2><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
</h2>
                </div>
                <p style="clear: both;">
                	<?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

                </p>
            </div>
            
            
            <ul class="cl ulback">
                <li style="border-bottom:  1px solid #e5e5e5;">上一篇：<?php echo $_smarty_tpl->getVariable('xiangqingshang')->value;?>
<span
                        class="news_xqback" onclick="javascript:(location.href='javascript:history.back(-1);')"></span>
                </li>
                <li> 下一篇：<?php echo $_smarty_tpl->getVariable('xiangqingxia')->value;?>
</li>
            </ul>
        </div>

        <div class="auto_selwreaper">
            <div class="auto_sel">
                <ul>
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('right')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                  		 <a href="/business/business-xq.php?whatid=<?php echo $_smarty_tpl->getVariable('right')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('right')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
	                  		 <img src="../<?php echo $_smarty_tpl->getVariable('right')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" style="width:188px; height:100px;">
	                        <h4><?php echo $_smarty_tpl->getVariable('right')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</h4>
                        </a>
                    </li>
                 <?php endfor; endif; ?>   
             
                </ul>
            </div>
            <a href="javascript:void(0)" class="rowbottom"><span></span></a>
            <a href="javascript:void(0)" class="rowtop"><span></span></a>
        </div>
    </div>
</div>
</div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>