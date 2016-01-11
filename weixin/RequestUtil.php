<?php
//测试  var_dump (RequestUtil::getWxAccessToken());

//$url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=6JQ6U6hu8RYvCpGWpmSNoiqEWSfLrUZhWX59Ws649wEHgSQCx708lQGuaCUF5BXK4KwsqEXL5Aul0N_vnumPdxi2htO-VnuANeQrRSAQvLoJLKfADAPRQ';

//$data = '{"button":[{"name":"大家说","sub_button":[{"type":"click","name":"进入聊天室","key":"enterChatingroom"},{"type":"click","name":"退出聊天室","key":"exitChatingroom"}]},{"name":"关于我们","sub_button":[{"type":"view","name":"联系我们","url":"http://www.alsovalue.com/contactus.php"}]},{"type":"view","name":"案例中心","url":"http://www.alsovalue.com/case.php"}]}';


//var_dump(RequestUtil::httpPost($url , $data , 'post'));

require_once("globleconfig.php");
require_once('LogUtil.php');

class RequestUtil {
	static function httpGet($url){
		//2初始化
		$ch = curl_init();
		//3.设置参数
		curl_setopt($ch , CURLOPT_URL, $url);
		curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
		//4.调用接口 
		$res = curl_exec($ch);
		LogUtil::logs(" RequestUtil.php httpGet =====> ".$res, getLogFile('/business.log'));
		//5.关闭curl
		curl_close( $ch );
	    if( curl_errno($ch) ){
			LogUtil::logs(" RequestUtil.php httpGet =====> 最后一次错误的信息".curl_error($ch), getLogFile('/business.log'));
	    }
		$arr = json_decode($res, true);
		if($arr["errcode"] == 40001) {
			
		}
		//var_dump( $arr );
		return $arr;
	}
	
	/**
	* 支持https请求
	*/
	static function httpPost($url,$data,$action){ // 模拟提交数据函数
        /*
		$o="";
        foreach ($data as $k=>$v)
        {
            $o.= "$k=".urlencode($v)."&";
        }
        $data=substr($o,0,-1);
		*/
        $curl = curl_init(); // 启动一个CURL会话
        curl_setopt($curl, CURLOPT_URL, $url); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2); // 从证书中检查SSL加密算法是否存在
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
        curl_setopt($curl, CURLOPT_POST, $action=='post'?true:false); // 发送一个常规的Post请求
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // Post提交的数据包
        curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
        $tmpInfo = curl_exec($curl); // 执行操作
        LogUtil::logs(" RequestUtil.php httpPost =====> ".$tmpInfo, getLogFile('/business.log'));
		
		if (curl_errno($curl)) {
            LogUtil::logs(" RequestUtil.php httpGet =====> 最后一次错误的信息".curl_error($curl), getLogFile('/business.log'));
        }
			 
        curl_close($curl); // 关闭CURL会话
		$arr = json_decode($tmpInfo, true);
        return $arr; // 返回数据
    }
	
}

?>