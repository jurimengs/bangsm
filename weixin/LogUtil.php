<?php
require_once('DateUtil.php');

class LogUtil {
	static function logs($content, $logfile){
		error_log(DateUtil::getCurrentTime().": ".$content."\r\n",3,$logfile);
	}
}

?>