<?php /* Smarty version Smarty-3.0.7, created on 2015-12-08 05:12:54
         compiled from "E:/wamp/www//jlwy/templates\conmpany-honor.html" */ ?>
<?php /*%%SmartyHeaderCode:28129566666d69d5259-01386415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10ee143565a3119cdcdea5bb10f5bb6bc6f0d00b' => 
    array (
      0 => 'E:/wamp/www//jlwy/templates\\conmpany-honor.html',
      1 => 1449551566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28129566666d69d5259-01386415',
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


    <link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" /> <!-- 主要文件 -->
    <link rel="stylesheet" href="http://dreamsky.github.io/main/blog/common/init.css">
    <!-- 添加按钮助手(这是可选的) -->
    <link rel="stylesheet" type="text/css" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />

    <!-- 添加jQuery库-->
    <script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>

    <!-- 添加mousewheel插件(这是可选的) -->
    <script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- 添加fancyBox主要JS和CSS文件 -->
    <script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>	<!-- 主要文件 -->
    <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <!-- 添加缩略图辅助(这是可选的)-->
    <link rel="stylesheet" type="text/css" href="../fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- 添加媒体辅助(这是可选的) -->
    <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>



</head>
<body>


	<!--top-->
	<?php $_template = new Smarty_Internal_Template("public/top.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<!--mainnav-->
    <?php $_template = new Smarty_Internal_Template('public/banner.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<div class="cmain">

		<?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		<div class="cmain_rightarea">
			<div class="cmain_4">
				<?php $_template = new Smarty_Internal_Template('public/home.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

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
" title="<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
" class="fancybox">
							<img src="../<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" width="190px;" height="140px;">
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

        $('.fancybox').fancybox();
	</script>
	<?php $_template = new Smarty_Internal_Template("public/foot.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>