<?php /* Smarty version Smarty-3.0.7, created on 2016-01-06 15:07:46
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/wxgroupuser.html" */ ?>
<?php /*%%SmartyHeaderCode:1289938927568cbd421cf0e1-89188657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e9de6e8861eb0dd66614a591c8a730674569d01' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/wxgroupuser.html',
      1 => 1452064061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1289938927568cbd421cf0e1-89188657',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>微信功能 &gt;&gt; 微信组用户管理</dt> 
        <dd> 
            <!--<a href="javascript:void(0)" onclick="deleteselected();" class="link">删除用户</a>
            <a href="?action=toaddpage" class="link">添加用户</a> -->
        </dd> 
   </dl> 
</div> 

<form action="" method="get" id="searchForm"> 
<div class="wrap title"> 
	<dl> 
    	<dt style="width: 800px;">微信组用户信息
    		<div style="color: red;">(管理员可以邀请用户加入组，但用户需要打开微信，进入聊天组才能开始聊天。如果用户超过48小时未与公众号互动，则需要从微信重新进入聊天组)</div>
    	</dt> 
        <dd>        
        <input type="text" name="keyword" id="keyword" value="" title="根据组名称搜索" onfocus="this.value='';" /> 
        <input type="submit" name="button" id="btnSearch" value=" 搜 索 组 " /> 
        </dd> 
    </dl>
	<dl> 
        <dt><a class="link" href="?action=initUser">同步已关注用户</a></dt>
    </dl>
</div> 
</form> 

<div class="wrap"> 
<form method="post" action="?action=delete" id="form1"> 
  <table width="100%" cellpadding="0" cellspacing="0" class="list"> 
    <thead> 
    <tr> 
      <th>组序号</th> 
      <th>组名称</th>
      <th style="text-align: left;">操作</th>
    </tr>  
     </thead> 
    <tbody> 
    	
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['name'] = 'groupUser';
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('groupUserArray')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['total']);
?>
	    <tr> 
	      <td><?php echo $_smarty_tpl->getVariable('groupUserArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['groupUser']['index']]['groupid'];?>
</td> 
	      <td><?php echo $_smarty_tpl->getVariable('groupUserArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['groupUser']['index']]['groupname'];?>
</td>
	      <td style="text-align: left;">
		      	<div style="float: left;">
			      	<a class="link" href="?action=groupusermanage&groupid=<?php echo $_smarty_tpl->getVariable('groupUserArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['groupUser']['index']]['groupid'];?>
">用户管理</a>
		      	</div>
			    <?php if ($_smarty_tpl->getVariable('groupUserArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['groupUser']['index']]['userList']!=null){?>
			    	<div style="float: left;"><a class="link" href="javascript:void(0);" onclick="showsibling(this);">用户预览>></a></div>
				    <div style="display: none;">
			    		<table width="100%" cellpadding="0" cellspacing="0" class="list"> 
					    	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('groupUserArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['groupUser']['index']]['userList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
					    	<tr>
					    		<!--<td><?php echo $_smarty_tpl->getVariable('groupUserArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['groupUser']['index']]['userList'][$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['openid'];?>
</td>-->
					    		<td style="text-align: left;"><?php echo $_smarty_tpl->getVariable('groupUserArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['groupUser']['index']]['userList'][$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['nickname'];?>
</td>
					    	</tr>
					    	<?php endfor; endif; ?>
					    </table>
				    </div>
			    <?php }?>
	    
	    
	      </td>
	    </tr>
    <?php endfor; else: ?>
    <tr>
        <td colspan="4"><div class="notext">没有相关信息</div></td>
    </tr>
    <?php endif; ?>
    
  
     </tbody> 
    </table> 
         
</form> 
<?php echo $_smarty_tpl->getVariable('pager')->value;?>

<div class="desc">*</div> 
</div> 

 
<script type="text/javascript"> 
<!--
$(document).ready(function() {
	$("#form1").validate({
		rules: {
			name: {
			required: true
			}
		},
		submitHandler:function(form){
			$("#btnSubmit").attr("disabled",true);
			form.submit();
		}
	});
});

function subselected(attName){
	obj = document.getElementsByName(attName);
	//check_val = [];
	var temp = false;
	for(var i=0; i<obj.length; i++) {
		if(obj[i].checked) {
			temp = true;
			break;
		}
	}
	return temp;
}

function deleteselected(){
	if(!!! subselected("groupids[]")){
		alert("当前未选中任何记录");
		return;
	}
	if(confirm("确认删除?")) {
		document.getElementById("form1").action = "?action=deleteselected";
		document.getElementById("form1").submit();
	}
}

function showsibling(obj){
	var aimobj = $(obj).parent().next();
	if(aimobj.css("display") == "none") {
		aimobj.show();
		$(obj).text("收起<<");
	} else {
		aimobj.hide();
		$(obj).text("展开>>");
	}
}
//-->
</script> 

