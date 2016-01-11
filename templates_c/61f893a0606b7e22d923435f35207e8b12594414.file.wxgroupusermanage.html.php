<?php /* Smarty version Smarty-3.0.7, created on 2015-12-30 23:27:20
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/wxgroupusermanage.html" */ ?>
<?php /*%%SmartyHeaderCode:9996067885683f7d85014c7-89568439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61f893a0606b7e22d923435f35207e8b12594414' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/wxgroupusermanage.html',
      1 => 1451489233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9996067885683f7d85014c7-89568439',
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
        </dd> 
   </dl> 
</div> 

<div class="wrap"> 
	<form method="post" action="?action=deletefromgroup" id="deleteform">
		<div>
			<div>已在组中的用户(<span style="font-color: #333;">可选中用户，从本组中删除</span>)</div>
			<div>
				<table width="100%" cellpadding="0" cellspacing="0" class="list"> 
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['name'] = 'groupUser';
$_smarty_tpl->tpl_vars['smarty']->value['section']['groupUser']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('groupUserList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<td><input type="checkbox" name="openid[]" value="<?php echo $_smarty_tpl->getVariable('groupUserList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['groupUser']['index']]['openid'];?>
" /></td>
						<td><?php echo $_smarty_tpl->getVariable('groupUserList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['groupUser']['index']]['nickname'];?>
</td>
					</tr>
			    <?php endfor; endif; ?>
			    </table>
			</div>
			<?php if ($_smarty_tpl->getVariable('groupUserList')->value!=null){?>
				<div><a href="javascript:void(0);" onclick="submitclick('deleteform');">确认删除</a></div>
			<?php }?>
	    </div>
	    <input type="hidden" name="groupid" value="<?php echo $_smarty_tpl->getVariable('groupid')->value;?>
"/>
	</form>
	<form method="post" action="?action=addtogroup" id="addform">
	    <br />
	    <div>
			<div>不在本组的用户(<span style="font-color: #333;">可选中用户，添加至组中</span>)</div>
			<div>
				<table width="100%" cellpadding="0" cellspacing="0" class="list"> 
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['name'] = 'otheruser';
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('otheruserlist')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['otheruser']['total']);
?>
					<tr>
						<td><input type="checkbox" name="openid[]" value="<?php echo $_smarty_tpl->getVariable('otheruserlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['otheruser']['index']]['openid'];?>
" /></td>
						<td><?php echo $_smarty_tpl->getVariable('otheruserlist')->value[$_smarty_tpl->getVariable('smarty')->value['section']['otheruser']['index']]['nickname'];?>
</td>
					</tr>
			    <?php endfor; endif; ?>
			    </table>
			</div>
			<?php if ($_smarty_tpl->getVariable('otheruserlist')->value!=null){?>
			<div><a href="javascript:void(0);" onclick="submitclick('addform');">确认添加</a></div>
			<?php }?>
	    </div>
	    <input type="hidden" name="groupid" value="<?php echo $_smarty_tpl->getVariable('groupid')->value;?>
"/>
	</form> 
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

function submitclick(formid){
	if(confirm("确认操作?")) {
		document.getElementById(formid).submit();
	}
}

//-->
</script> 

