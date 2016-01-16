<?php /* Smarty version Smarty-3.0.7, created on 2016-01-07 13:24:32
         compiled from "F:/wamp/www//yanqi/templates\public/topjs.html" */ ?>
<?php /*%%SmartyHeaderCode:3150568e6710abb8a5-26926689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58b6a24d0f061187ceead1915d4aed5926fe976a' => 
    array (
      0 => 'F:/wamp/www//yanqi/templates\\public/topjs.html',
      1 => 1452061186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3150568e6710abb8a5-26926689',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('yemianid')->value=="index"){?>
<title><?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('web')->value['keywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('web')->value['description'];?>
" />

<link rel="stylesheet" type="text/css" href="css/css.css">
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="./js/bzBanner.js" ></script>
<script src="js/js.js" type="text/javascript"></script>
<script type="text/javascript" src="./1.10.2.min.js" ></script>
<link type="text/css" href="css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/lrtk.js"></script>
<script type="text/javascript" src="js/scrollTop.js"></script>
<?php }else{ ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('web')->value['keywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('web')->value['description'];?>
" />
<link rel="stylesheet" type="text/css" href="../css/css.css">
<script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/bzBanner.js" ></script>
<script src="../js/js.js" type="text/javascript"></script>
<script type="text/javascript" src="../1.10.2.min.js" ></script>
<link type="text/css" href="../css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/lrtk.js"></script>
<script type="text/javascript" src="../js/scrollTop.js"></script>
<?php }?>	
	