<?php
ob_start();//打开输出缓冲区
//$filename=eregi("://",$_GET["url"])?$_GET["url"]:"";//防止下载本地PHP源文件处理
$filename=$_GET["url"];
$pathinfo=pathinfo($filename);
$data=@file_get_contents($filename);
//$data=iconv("gb2312","utf-8",$data);
$filesize=@strlen($data);
//$name=$_GET["name"]?$_GET["name"].".$pathinfo[extension]":basename($filename);
$name=substr($filename,strrpos($filename,'/')+1);
@header("Content-Type:application/x-msdownload");// dll文件
///弹出文件下载对话框
@header("Content-Disposition:".(strstr($_SERVER[TTP_USER_AGENT],"MSIE")?"":"attachment;")."filename=$name");
@header("Content-Length:$filesize");
echo $data;
ob_end_flush();//结束（发送）输出缓冲区的内容，关闭输出缓冲区
//die;
?>