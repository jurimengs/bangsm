<?php

class StringUtil {
	public static function substring($aim, $start, $end){
		return substr($aim, $start, $end);
	}
	
	public static function sublaststr($aim){
		return substr($aim, 0, strlen($aim) -1);
	}
}

?>