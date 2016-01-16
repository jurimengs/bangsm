<?php
include_once($_SERVER['DOCUMENT_ROOT']."/wap/smarty/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = $_SERVER['DOCUMENT_ROOT']."/wap/templates";
$smarty->compile_dir = $_SERVER['DOCUMENT_ROOT']."/wap/templates_c";
$smarty->cache_dir = $_SERVER['DOCUMENT_ROOT']."/wap/smarty_cache";
$smarty->config_dir = $_SERVER['DOCUMENT_ROOT']."/wap/configs";
$smarty->allow_php_tag = false;
$smarty->left_delimiter = "{"; 
$smarty->right_delimiter = "}";
?>