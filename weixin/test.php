<?php
$strrule = "/^更新信息+.*/";

$content = "更新信息+测试+19933333444";
if(preg_match($strrule, $content)) {
	$arr = explode("+", $content);
	
	echo $arr[0];
	echo "<br />";
	echo $arr[1];
	echo "<br />";
	echo $arr[2];
	
	
	echo "<br />";
	if(!preg_match("/^.{0,1}$/", $arr[1])){
		echo "eeee";
	}
	
	echo "<br />";
	if(!preg_match("/^1[3|4|5|7|8][0-9]\\d{8}$/", $arr[2])){
		echo "aaaa";
	}
}
			
			
/*
if(preg_match($strrule, "更新信息:xxxx")) {
	echo "xxxxxxx";
} else {
	echo "........";
}*/
?>