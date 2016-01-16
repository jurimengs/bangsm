<?php
// http://bangmaisiw.w107.mc-test.com/sysadmin/wxindex.php
function localToken(){
    return "571ae9d6c3aedssq75c408jdsws2257d";
}

function appid(){
     //return "wx97a3cc925c96766d"; // webrsbk
	 return "wx6f9dc2bfd436b651"; // alsovalue
}

function secret(){
     //return "e2a5f37ca754357530619dbbb3fed90b"; // webrsbk
	 return "297c3a7c8305ce568e84407e3cd4e288"; // alsovalue
}

function grantType(){
     return "client_credential";
}

function wxTokenUrl(){
     return "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential";
}

function wxTicketUrl(){
     return "https://api.weixin.qq.com/cgi-bin/ticket/getticket";
}

function typeForTicket(){
     return "jsapi";
}

/**
 * delete menu url
 */
function wxDeleteBottommenuUrl(){
     return "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=";
}

/**
 * create menu url
 */
function wxCreateBottommenuUrl(){
     return "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=";
}

/**
 * get group id list
 */
function wxGetGroupid(){
     return "https://api.weixin.qq.com/cgi-bin/groups/get?access_token=";
}

/**
 * get user id list
 */
function wxGetUseridList(){
     return "https://api.weixin.qq.com/cgi-bin/user/get?access_token=";
}

/**
 * get user's group 
 */
function wxGetUserGroup(){
     return "https://api.weixin.qq.com/cgi-bin/groups/getid?access_token=";
}

/**
 * get user's baseinfo
 */
function wxGetUserBaseinfo(){
     return "https://api.weixin.qq.com/cgi-bin/user/info?lang=zh_CN&access_token=";
}

/**
 * get user's baseinfo
 */
function wxSendMessageByService(){
     return "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=";
}

/**
 * batch send picmsg
 */
function wxBatchSendPicMsg(){
     return "https://api.weixin.qq.com/cgi-bin/message/mass/send?access_token=";
}

/**
 * upload pic message
 */
function wxUploadPicMsg(){
     return "https://api.weixin.qq.com/cgi-bin/media/uploadnews?access_token=";
}

/**
 * upload pic/media/vedio merterials
 */
function wxUploadPic(){
    //return "https://api.weixin.qq.com/cgi-bin/media/upload?access_token=";
    return "http://file.api.weixin.qq.com/cgi-bin/media/upload?access_token=";
}
 
function getLogFile($fname){
     return dirname(__FILE__).$fname;
}
 
function getEnterKeyName(){
	return "enterChatingroom";
}
 
function getExitKeyName(){
	return "exitChatingroom";
}
 
function getSuccessStr(){
	return "success";
}
 
/**
 * 每页显示的条目数
 */
function getPageSize(){
	return 10;
}

/**
 *  每次显示的页数
 */
function getSubPages(){
	return 5;
}

/**
 * 返回的是globleconfig.php所在目录全路径
 */
function getRootPath(){
	return str_replace('\\', '/', dirname(__FILE__));
}

?>