<?php
include_once($_SERVER['DOCUMENT_ROOT']."/smarty/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = $_SERVER['DOCUMENT_ROOT']."/templates";
$smarty->compile_dir = $_SERVER['DOCUMENT_ROOT']."/templates_c";
$smarty->cache_dir = $_SERVER['DOCUMENT_ROOT']."/smarty_cache";
$smarty->config_dir = $_SERVER['DOCUMENT_ROOT']."/configs";
$smarty->allow_php_tag = false;
$smarty->left_delimiter = "{"; 
$smarty->right_delimiter = "}";
?>