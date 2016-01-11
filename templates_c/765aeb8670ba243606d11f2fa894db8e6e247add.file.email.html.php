<?php /* Smarty version Smarty-3.0.7, created on 2015-11-05 10:13:10
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/sysadmin/email.html" */ ?>
<?php /*%%SmartyHeaderCode:2127808531563abb36447451-13708337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765aeb8670ba243606d11f2fa894db8e6e247add' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/sysadmin/email.html',
      1 => 1446630101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2127808531563abb36447451-13708337',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>系统设置 &gt;&gt; 邮件设置</dt> 
        <dd> 
        </dd> 
   </dl> 
</div> 


<?php if ($_smarty_tpl->getVariable('action')->value==''){?>
<div class="wrap title"> 
	<dl> 
    	<dt>邮件设置</dt> 
        <dd>        
        </dd> 
    </dl>
</div> 

<div class="wrap">
<form id="form1" name="form1" method="post" action="?action=edit"> 
<table class="add">
<tr> 
	<th>SMTP服务器：</th> 
    <td>
    <input name="mail_smtp" maxlength="50" type="text" class="input" id="mail_smtp" style="width:400px;" value="<?php echo $_smarty_tpl->getVariable('mailInfo')->value['mail_smtp'];?>
" /> 
    <span>如：smtp.126.com</span> 
    </td>
</tr> 
<tr> 
    <th>SMTP服务器端口：</th>
    <td>
    <input name="mail_port" maxlength="50" type="text" class="input" id="mail_port" style="width:400px;" value="<?php echo $_smarty_tpl->getVariable('mailInfo')->value['mail_port'];?>
" /> 
    <span>一般为25</span> 
    </td>
</tr> 
<tr> 
	<th>邮箱账号：</th>
    <td> 
        <input name="mail_user" maxlength="50" type="text" class="input" id="mail_user" style="width:400px;" value="<?php echo $_smarty_tpl->getVariable('mailInfo')->value['mail_user'];?>
" /> 
        <span>邮箱账号</span> 
    </td>
</tr> 
<tr> 
	<th>账号密码：</th>
    <td> 
        <input name="mail_password" maxlength="50" type="password" class="input" id="mail_password" style="width:400px;" value="<?php echo $_smarty_tpl->getVariable('mailInfo')->value['mail_password'];?>
" /> 
        <span>账号密码</span> 
    </td>
</tr> 
<tr> 
	<th>发送测试邮件：</th>
    <td> 
        <input name="toEmail" maxlength="50" type="text" class="input" id="toEmail" style="width:200px;" />
        <font id="txtTest"><a href="#" onclick="ToTest();"><u>点我发送测试邮件</u></a></font>
    </td>
</tr> 
<tr>
	<th></th>
    <td>
    <input name="btnSubmit" type="submit" id="btnSubmit" value="确定修改" /> 
    </td>
</tr>
</table>
</form> 

</div> 

<?php }?>


<script type="text/javascript"> 
function ToTest(){
	var email = $("#toEmail").val();
	if(emailCheck(email)){
		$.ajax({
			type:"get",
			url :"email.php",
			data:{action:"testTo",mail_smtp:$("#mail_smtp").val(),mail_port:$("#mail_port").val(),mail_user:$("#mail_user").val(),mail_password:$("#mail_password").val(),toEmail:$("#toEmail").val()},
			beforeSend :function(){
				$("#txtTest").html("<img src='images/onLoad.gif' align='absmiddle' />&nbsp;正在发送...");
			},
			success: function(msg){
				if(msg=="1"){
					alert('发送成功');
				}else{
					alert('发送失败');
				}
				$("#txtTest").html("<a href=\"#\" onclick=\"ToTest();\" id=\"txtTest\"><u>点我发送测试邮件</u></a>");
			},
			error: function(){
				alert('发生错误');
				$("#txtTest").html("<a href=\"#\" onclick=\"ToTest();\" id=\"txtTest\"><u>点我发送测试邮件</u></a>");
			}
		})
	}else{
		alert("Email输入错误");
	}
}

function emailCheck (emailStr) {
	var emailPat=/^(.+)@(.+)$/;
	var matchArray=emailStr.match(emailPat);
	if (matchArray==null) {
		return false;
	}
	return true;
}
</script> 

