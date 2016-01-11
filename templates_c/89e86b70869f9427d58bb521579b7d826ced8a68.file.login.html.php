<?php /* Smarty version Smarty-3.0.7, created on 2015-09-30 04:08:59
         compiled from "G:/wamp/www//sqs/templates\sysadmin/login.html" */ ?>
<?php /*%%SmartyHeaderCode:5826560b605b31f550-38559563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89e86b70869f9427d58bb521579b7d826ced8a68' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\sysadmin/login.html',
      1 => 1442114318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5826560b605b31f550-38559563',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>网站系统管理 v10.12</title> 
<meta content="" name="author" /> 
<meta content="" name="Copyright" /> 
<script src="jquery/jquery-1.4.2.min.js" type="text/javascript"></script> 
<script src="jquery/jquery.validate.js" type="text/javascript"></script> 

<style type="text/css"> 
body {
	margin:0px;
}
body,td,th,input,password{ font-size:12px;font-family: Verdana, Geneva, sans-serif;}
body,td,th {
	font-size: 12px;
}
.input {
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
background:#F6FAF7; height:26px; line-height:16px; padding:3px; border:1px solid #666;font-weight:bold;font-size:12px;font-family:Verdana, Geneva, sans-serif;}
.inputhover {
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
background:#FFFBBC; height:26px; line-height:16px; padding:3px; border:1px solid #666;font-weight:bold;font-size:12px;font-family:Verdana, Geneva, sans-serif;}
 
.btn { background:url(images/login_r6_c7.png); height:31px; width:90px; border:0px;font-size:12px;}
.btnhover { background:url(images/login_r8_c3.png); height:31px; width:90px; border:0px;font-size:12px;}
a:link {
	color: #0E7347;
}
a:visited {
	color: #0E7347;
}
a:hover {
	color: #FF8600;
}
a:active {
	color: #0E7347;
}
label{color:Red;}
.error{color:Red;}
 
</style> 
 
</head> 
<body> 
<form name="form1" method="post" action="" id="form1"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%"> 
  <tr> 
    <td align="center" valign="middle"> 
    
    
      <table width="700" border="0" cellspacing="0" cellpadding="0"> 
        <tr> 
          <td width="350" align="center"><p><img src="images/login_r4_c2.png" width="234" height="120" alt="" /></p> 
            <p>&nbsp;</p> 
            <p>&nbsp;</p></td> 
          <td width="30"><img src="images/login_r2_c4.png" width="28" height="405"></td> 
          <td width="350" align="center"><table width="300" border="0" cellspacing="0" cellpadding="5"> 
            <tr> 
              <td height="50" colspan="2"><img src="images/login_r3_c6.png" width="212" height="30" alt=""><br /> 
                  
                </td> 
              </tr> 
              <tr> 
              <td width="41" align="left"></td> 
              <td width="239"> 
                  <p id="errorInfo" class="error" style="display:none;"></p></td> 
            </tr> 
            <tr> 
              <td width="41" align="left">用户名</td> 
              <td width="239"> 
                  <input name="txtUserid" type="text" id="txtUserid" class="input" style="width:160px;" tabindex="1" /></td> 
            </tr> 
            <tr> 
              <td align="left">密&nbsp;&nbsp;&nbsp;码</td> 
              <td><input name="txtPassword" type="password" id="txtPassword" class="input" style="width:160px;" tabindex="2" /> 
                  	<a href="get_password.php">忘记密码?</a>
                  </td> 
            </tr> 
            <tr> 
              <td align="left">验证码</td> 
              <td> 
                  <input name="txtCode" type="text" maxlength="4" id="txtCode" class="input" style="width:90px;" tabindex="3" /> 
              
                  <img src="../includes/authcode.fun.php" id="validatecode" alt="" onClick="fleshVerify();" align="top" /> 
				<a href="javascript:fleshVerify()">换一张</a> 
              </td> 
            </tr> 
            <tr> 
              <td align="center"></td> 
              <td><label> 
                  <input type="submit" name="btnSubmit" value="登录" id="btnSubmit" class="btn" tabindex="4" /> 
              </label> 
              <span id="tip_load"></span> 
              </td> 
            </tr> 
            
            <tr> 
              <td>&nbsp;</td> 
              <td>&nbsp;</td> 
            </tr> 
          </table></td> 
        </tr> 
      </table> 
    
    
    </td> 
  </tr> 
</table> 
 
 <script src="script/login.js" type="text/javascript"></script> 
</form> 
</body> 
</html>