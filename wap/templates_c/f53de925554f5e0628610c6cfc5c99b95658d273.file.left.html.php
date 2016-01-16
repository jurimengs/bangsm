<?php /* Smarty version Smarty-3.0.7, created on 2016-01-11 02:36:20
         compiled from "E:/wamp/www//bangsm/templates\sysadmin/left.html" */ ?>
<?php /*%%SmartyHeaderCode:5021569315243e56e5-32810150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f53de925554f5e0628610c6cfc5c99b95658d273' => 
    array (
      0 => 'E:/wamp/www//bangsm/templates\\sysadmin/left.html',
      1 => 1452235486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5021569315243e56e5-32810150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站管理系统 v10.12</title>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta content="yuan.dai" name="author" />
<meta content="43sj.com" name="Copyright" />
<link rel="stylesheet" href="style/left.css" type="text/css" />
<script src="jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
if (window == top) {
    top.location.href='main.php'
}
-->
</script>
</head>
<body>

<div class="nav">
	<ul>
    	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('menuList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
    	<li><a href="" class="top_item"><?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</a>
        	<ul>
            	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list2']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['name'] = 'list2';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['subMenuList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list2']['total']);
?>
                <li><a href="<?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['subMenuList'][$_smarty_tpl->getVariable('smarty')->value['section']['list2']['index']]['url'];?>
" target="main"><?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['subMenuList'][$_smarty_tpl->getVariable('smarty')->value['section']['list2']['index']]['name'];?>
</a></li>
                <?php endfor; endif; ?>
            </ul>
        </li>
        <?php endfor; endif; ?>
    </ul>
</div>

<script type="text/javascript">
$(function(){
	//$(".nav li ul li").addClass("selected");
	$(".nav li").toggle(
		function(){
			$(this).find("ul").animate({height: 'toggle', opacity: 'toggle'}, { duration: 200 })
		},
		function(){
			$(this).find("ul").animate({height: 'toggle', opacity: 'toggle'}, { duration: 200 })
		}
	)
	
	$(".nav li").hover(
		function(){
			$(this).find("a[class=top_item]").animate({paddingRight: "25px" }, { duration: 200 })
		},
		function(){
			$(this).find("a[class=top_item]").animate({paddingRight: "15px" }, { duration: 200 })
		}
	)
	
	$(".nav li ul li a").click(
		function () {
			parent.main.location.href=(this.href);
			$(".nav li ul li a").removeClass('selected');
			$(this).addClass("selected");
			return false;
		}
	); 
})
</script>

</body>
</html>