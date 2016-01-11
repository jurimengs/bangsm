<?php
class JsonUtil {
	/**
	 * arr json格式的数组 array(""=>"",""=>"")
	 *  json格式的字符串
	 */
	static function getJsonStrFromArray($arr){
		// JSON_UNESCAPED_UNICODE
		return json_encode($arr, JSON_UNESCAPED_UNICODE);
	}
	
	/**
	 * jsonStr json格式的字符串
	 *  json object
	 */
	static function getJsonObjFromJsonStr($jsonStr){
		return json_decode($jsonStr, true);
	}
	
	/**
	 * arr json格式的数组 array(""=>"",""=>"")
	 *  json object
	 */
	static function getJsonObjFromArray($arr){
		return json_decode(json_encode($arr, JSON_UNESCAPED_UNICODE), true);
		//return JsonUtil::getJsonObjFromJsonStr(JsonUtil::getJsonStrFromArray($arr));
	}
	
	/**
	 * jsonObj json object
	 *  array
	 */
	static function getArrayFromJson($jsonObj){
		return (array)$jsonObj;
	}
	
}

?>