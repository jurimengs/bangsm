<?php
/*
 * Created on 2010
 * Link for job@phpyun.com
 * This PHPYun.Rencai System Powered by PHPYun.com
 */
session_start();
function random($len) {
	$srcstr = "1a2s3d4f5g6hj8k9l0qwertyuiopzxcvbnm";
	mt_srand();
	$strs = "";
	for ($i = 0; $i < $len; $i++) {
		$strs .= $srcstr[mt_rand(0, 10)];
	}
	return $strs;
}
$str = random(4); //�����ɵ��ַ�

$width = 50; //��֤��ͼƬ�Ŀ��

$height = 25; //��֤��ͼƬ�ĸ߶�

@ header("Content-Type:image/png");

$im = imagecreate($width, $height);

//����ɫ
$back = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
//ģ�����ɫ
$pix = imagecolorallocate($im, 246, 250, 247);
//����ɫ
$font = imagecolorallocate($im, 102, 102, 102);
//��ģ�����õĵ�

mt_srand();
for ($i = 0; $i < 1000; $i++) {
	imagesetpixel($im, mt_rand(0, $width), mt_rand(0, $height), $pix);
}
imagestring($im, 5, 7, 5, $str, $font);

imagerectangle($im, 0, 0, $width -1, $height -1, $font);

imagepng($im);

imagedestroy($im);

$str = md5($str);

//SetCookie("authcode", $str, time() + 3600, "/");

$_SESSION["authcode"] = $str;
?>
