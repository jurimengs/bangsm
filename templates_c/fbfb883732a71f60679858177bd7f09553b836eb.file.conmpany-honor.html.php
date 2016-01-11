<?php /* Smarty version Smarty-3.0.7, created on 2015-11-04 08:30:31
         compiled from "G:/wamp/www//jl/templates\conmpany-honor.html" */ ?>
<?php /*%%SmartyHeaderCode:302315639c2276a66b3-48928699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbfb883732a71f60679858177bd7f09553b836eb' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\conmpany-honor.html',
      1 => 1446625827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302315639c2276a66b3-48928699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>走进嘉龙</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../js/jquery.soChange.js"></script>
<script type="text/javascript" src="../js/index.js"></script>
<script type="text/javascript" src="../js/super_slider.js"></script>
<script type="text/javascript" src="../js/placeholder.js"></script>
<script type="text/javascript" src="../js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css"
	href="../css/jquery.lightbox-0.5.css" media="screen" />

</head>
<body>


	<!--top-->
	<?php $_template = new Smarty_Internal_Template("public/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<!--mainnav-->
	<div class="cbanner">
		<img src="../images/conmpany/company.png">
	</div>
	<div class="cmain">

		<?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		<div class="cmain_rightarea">
			<div class="cmain_4">
				<div class="cmain_rightarea_title">
					<h3>
						<span></span>公司荣誉
					</h3>
					<div class="cmain_rightarea_title_word">您的位置：首页 > 走进嘉隆 > 公司荣誉</div>
				</div>

				<div class="f">
				
				
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('list')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<a target="view_window" href="../<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
">
							<img src="../<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
">
							<div class="f_copy">
								<span class="f_copy_span"></span>
							</div>
						</a> 
				<?php endfor; endif; ?>		
						
					
				</div>
				<div class="cmain_4_index">
					<?php echo $_smarty_tpl->getVariable('pager')->value;?>

				</div>
			</div>
		</div>
	</div>
	<script>
		
	</script>
	<?php $_template = new Smarty_Internal_Template("public/foot.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>