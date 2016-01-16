<?php
session_start();
unset($_SESSION['cn_sysadmin']);
header("Location:login.php");
?>