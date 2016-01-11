<?php
class DateUtil {
	/**
	* 获取当前时间 YYYY-MM-DD HH:MM:SS
	*/
	static function getCurrentTime(){
		// 先获取时间(时：分：秒)
		$timeStr = date("YmdHis",time());
		return $timeStr;
	}
	
	static function timeFormat($time, $pattern){
		// 先获取时间(时：分：秒)
		$timeStr = date($pattern,strtotime($time));
		return $timeStr;
	}
	
	/**
	 * 计算两个日期间的时间差
	 * @return 返回时间差，单位：秒
	 */
	static function getTimeInterval($currenttime, $updatetime){
		$days=floor((strtotime($currenttime)-strtotime($updatetime))/86400);
		$hour=floor((strtotime($currenttime)-strtotime($updatetime))%86400/3600);
		$minute=floor((strtotime($currenttime)-strtotime($updatetime))%86400/60);
		$second=floor((strtotime($currenttime)-strtotime($updatetime))%86400%60);
		
		$seconds = $days * 24 + $hour * 60 + $minute * 60 + $second;
		return $seconds;
	}
	
	
}

?>