<?php
/**
* 获取当前URL
*/
function current_url(){
	return "http://".$_SERVER ['HTTP_HOST'].$_SERVER['PHP_SELF'];
}

/**
 * 获取上一页URL
 */
function prev_url(){
	return $_SERVER['HTTP_REFERER'];
}
/**
 * 获取IP
 */
function get_ip(){
	return $_SERVER["REMOTE_ADDR"];
}

/**
 * 截取字符串，用...代替
 */
function sub_str($str,$number){
	if(strlen_utf8($str)>$number){
		return substr_utf8($str,0,$number).'...';
	}
	return $str;
}
/**
 * 截取utf8字符串 
 */
function substr_utf8($str, $from, $len) 
{ 
	return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'. 
	'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s', 
	'$1',$str); 
} 
/**
 * UTF8字符串长度
 */
function strlen_utf8($str) {
	$i = 0;
	$count = 0;
	$len = strlen ($str);
	while ($i < $len) {
		$chr = ord ($str[$i]);
		$count++;
		$i++;
		if($i >= $len) break;
		if($chr & 0x80) {
		$chr <<= 1;
		while ($chr & 0x80) {
			$i++;
			$chr <<= 1;
		}
	}
}
return $count;
}

/**
 * javascript alert 消息提示
 */
function alert($msg,$url){
	if($url=="back"){
		echo("<script>alert('".$msg."');history.back();</script>");
	}else{
		echo("<script>alert('".$msg."');location.href='".$url."';</script>");
	}
	die;
}

/**
 * 成功消息提示
 */
function info_success($msg){
	echo("<script>");
	echo("location.href='/info.php?info=".urlencode($msg)."&type=success'");
	echo("</script>");
	die;
}
/**
 * 通知消息提示
 */
function info_notice($msg){
	echo("<script>");
	echo("location.href='/info.php?info=".urlencode($msg)."&type=notice'");
	echo("</script>");
	die;
}
/**
 * 错误消息提示
 */
function info_error($msg){
	echo("<script>");
	echo("location.href='/info.php?info=".urlencode($msg)."&type=error'");
	echo("</script>");
	die;
}

/**
 * 后台成功消息提示
 */
function info_sysadmin_success($msg){
	echo("<script>");
	echo("location.href='info.php?info=".urlencode($msg)."&type=success'");
	echo("</script>");
	die;
}
/**
 * 后台通知消息提示
 */
function info_sysadmin_notice($msg){
	echo("<script>");
	echo("location.href='info.php?info=".urlencode($msg)."&type=notice'");
	echo("</script>");
	die;
}
/**
 * 后台错误消息提示
 */
function info_sysadmin_error($msg){
	echo("<script>");
	echo("location.href='info.php?info=".urlencode($msg)."&type=error'");
	echo("</script>");
	die;
}
/**
 * 后台成功提示
 */
function success_msg($msg, $url){
	echo("<script>");
	echo("self.parent.topframe.showsuccessmsg('".$msg."');");
	echo("location.href='".$url."'");
	echo("</script>");
	die;
}
/**
 * 后台消息提示
 */
function notice_msg($msg,$url){
	Echo("<script>");
	Echo("self.parent.topframe.shownoticemsg('".$msg."');");
	if ($url=="back")
	Echo("history.back();");
	else
	Echo("location.href='".$url."'");
	Echo("</script>");
	die;
}
/**
 * 后台错误提示
 */
function error_msg($msg,$url){
	Echo("<script>");
	Echo("self.parent.topframe.showerrormsg('".$msg."');");
	if ($url=="back"){
		Echo("history.back();");
	}else{
		Echo("location.href='".$url."'");
	}
	Echo("</script>");
	die;
}

?>