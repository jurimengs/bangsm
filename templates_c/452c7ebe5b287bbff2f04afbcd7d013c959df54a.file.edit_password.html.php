<?php /* Smarty version Smarty-3.0.7, created on 2015-11-06 11:28:52
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/sysadmin/edit_password.html" */ ?>
<?php /*%%SmartyHeaderCode:969269037563c1e74b59cc7-96361452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '452c7ebe5b287bbff2f04afbcd7d013c959df54a' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/sysadmin/edit_password.html',
      1 => 1446630101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '969269037563c1e74b59cc7-96361452',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>系统设置 &gt;&gt; 修改密码</dt> 
        <dd> 
            
        </dd> 
   </dl> 
</div> 

<?php if ($_smarty_tpl->getVariable('action')->value==''){?>

<div class="wrap title"> 
	<dl> 
    	<dt>修改密码</dt> 
        <dd>        
        <span class="red">*</span>号为必填项
        </dd> 
    </dl>
</div> 

<div class="wrap">
<form id="form1" name="form1" method="post" action="?action=edit"> 
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('admin')->value['id'];?>
" /> 
<table class="add">
<tr>
	<th>登录用户名：<font class="red">*</font></th>
    <td>
    <input name="user_id" maxlength="20" type="text" class="input" id="user_id" style="width:200px;" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('admin')->value['user_id'];?>
" /> 
    </td>
</tr>
<tr>
	<th>姓名：<font class="red">*</font></th>
    <td>
    <input name="username" maxlength="20" type="text" class="input" id="username" style="width:200px;" value="<?php echo $_smarty_tpl->getVariable('admin')->value['username'];?>
" /> 	</td>
</tr>
<tr>
	<th>旧密码：</th>
    <td>
    <input name="oldpassword" maxlength="20" type="password" class="input" id="oldpassword" style="width:200px;" /> 
    </td>
</tr>
<tr>
	<th>新密码：</th>
    <td>
    <input name="password" maxlength="20" type="password" class="input" id="password" style="width:200px;" /> 
    </td>
</tr>
<tr>
	<th>确认新密码：</th>
    <td>
    <input name="confirmpassword" maxlength="20" type="password" class="input" id="confirmpassword" style="width:200px;" /> 
    <span>不修改密码以上三项请留空</span>
    </td>
</tr>
<tr>
	<th>邮箱：<font class="red">*</font></th>
    <td>
    <input name="email" maxlength="50" type="text" class="input" id="email" style="width:200px;" value="<?php echo $_smarty_tpl->getVariable('admin')->value['email'];?>
" /> 
    <span>找回密码时使用</span>    
    </td>
</tr>
<tr>
	<th></th>
    <td>
    <input name="btnSubmit" type="submit" id="btnSubmit" value="确定" /> 
    <input name="btnReset" type="reset" id="btnReset" value="清除" /> 
    <input name="btnBack" type="button" id="btnBack" value="返回" /> 
    </td>
</tr>
</table>
</form> 
</div> 

<?php }?>

 
<script type="text/javascript"> 
<!--
$(document).ready(function() {
	$("#form1").validate({
		rules: {
			user_id: { required: true,minlength:5 },
			username:{required:true},
			//oldpassword:{required:true},
			password:{minlength:5},
			confirmpassword:{equalTo: "#password"},
			email:{required:true,email:true}
		},
		submitHandler:function(form){
			$("#btnSubmit").attr("disabled",true);
			form.submit();
		}
	});
})
//-->
</script> 

