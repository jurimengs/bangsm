<?php

/*

require_once('WxUtil.php');
$res = WxUtil::initMenu();
echo "errcode:".$res->errcode."\r\n";
echo "errmsg:".$res->errmsg."\r\n";

echo appid();*/

/*echo "before:".$_SESSION['wxToken']."\r\n";
WxUtil::initWxTokenToDB();
echo "after:".$_SESSION['wxToken']."\r\n";*/

//echo WxUtil::dbtest();

//echo WxUtil::getWxTokenFromDB();

require_once('globleconfig.php');
require_once('LogUtil.php');

$fileTemp = getLogFile("/wxtoken");
$lockfileTemp = getLogFile("/token_file_lock.tmp");
echo writeTokenToFile($fileTemp, $lockfileTemp, "aaaa\r\n"."<br />");
echo getWxTokenFromFile($fileTemp);

function writeTokenToFile($filename, $lockfile, $content){
	// 写之前先判断是否存在锁文件
	if(file_exists($lockfile)) {
		return "file in writing, only can read\r\n"."<br />";
		exit();
	}
	// 如果不存在锁文件，就创建一个锁
	$lockTemp = fopen($lockfile, "w");
	
	// 读取路径产生文件对象，并且创建/打开
	$temp = fopen($filename, "w") or die("Unable to open file!");
	// 写入内容
	fwrite($temp, $content);
	// 关闭文件
	fclose($temp);
	// 关闭锁文件
	fclose($lockTemp);
	sleep(10);
	// 删除锁文件
	unlink($lockfile);
	echo "write file success";
}

function getWxTokenFromFile($fileTemp){
    $handle = fopen($fileTemp, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
    //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
    $contents = fread($handle, filesize ($fileTemp));
    fclose($handle);
	return $contents;
}


?>