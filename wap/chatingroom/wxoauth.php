<?php
require_once '../../weixin/RequestUtil.php';
require_once '../../weixin/DateUtil.php';
require_once '../../weixin/globleconfig.php';
require_once '../../weixin/LogUtil.php';
require_once '../configs/smarty.inc.php';
require_once 'WS.php';

// http://www.jb51.net/article/48019.htm
if(isset($_GET["code"])) {
	$code = $_GET["code"];
	$secret = secret();
	$appid = appid();
	$oauthurl = wxOauth();
	$url = $oauthurl."?appid=".$appid."&secret=".$secret."&code=".$code."&grant_type=authorization_code";
	
	//LogUtil::logs($url, getLogFile("/business.log"));
	$returnJson = RequestUtil::httpGet($url);
	// {"access_token":"OezXcEiiBSKSxW0eoylIeG_LpV4TpnX-BxNbAVVAasaRyPm55zyI9CKaVNciQOEw8iu_pEDXCiBKbbSJbzzqarhyfecqXoplnmCl7HsBiWFARy1Ob3MealEkubEDs8KHeRbAr5Awrvr7RR3i5t24GA","expires_in":7200,"refresh_token":"OezXcEiiBSKSxW0eoylIeG_LpV4TpnX-BxNbAVVAasaRyPm55zyI9CKaVNciQOEwUHOmtG9PkoiFUefqTDaX00sVqxhfoyE-jbYDCIjldLBnZvj1QP0gGev-Tw2BWQWTdIOnZ9EQDB0Oi0w2ZlT0lA","openid":"osp6swrNZiWtEuTy-Gj1cBVA1l38","scope":"snsapi_base"}
	$openid = $returnJson["openid"];
	if(!empty($returnJson["openid"])) {
		$smarty->assign('openid',$openid);
		//echo "========".$openid;
		// 开始一个端口，用于做聊天室
		$ws = new WS('bangmaisiw.w107.cndns5.com', 8000);
		
		//$smarty->display('chatingroom/chating.html');
	}
}

?>