<?php /* Smarty version Smarty-3.0.7, created on 2016-01-06 16:37:14
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/wxgroup.html" */ ?>
<?php /*%%SmartyHeaderCode:1148239459568cd23a78fe02-66563274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a97e132d41192e1df5eab8f8d531d225dcbe6f74' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/wxgroup.html',
      1 => 1452069431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1148239459568cd23a78fe02-66563274',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>微信功能 &gt;&gt; 微信组管理</dt> 
        <dd> 
            <a href="javascript:void(0)" onclick="deleteselected();" class="link">删除组</a>
            <a href="?action=toaddpage" class="link">添加组</a> 
        </dd> 
   </dl> 
</div> 

<form action="" method="get" id="searchForm"> 
<div class="wrap title"> 
	<dl> 
    	<dt>微信组信息</dt> 
        <dd>        
        <input type="text" name="keyword" id="keyword" value="" title="根据名称搜索" onfocus="this.value='';" /> 
        <input type="submit" name="button" id="btnSearch" value=" 搜 索 " /> 
        </dd> 
    </dl>
</div> 
</form> 

<div class="wrap"> 
<form method="post" action="" id="form1"> 
  <table width="100%" cellpadding="0" cellspacing="0" class="list"> 
    <thead> 
    <tr> 
      <th><input type="checkbox" id="all" /></th> 
      <th class="text-left">组名称</th> 
      <th>组创建时间</th>
      <th>创建人</th> 
      <th>备注</th> 
      <!--<th>查看组员</th>--> 
    </tr>  
     </thead> 
    <tbody> 
    	
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['group']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['name'] = 'group';
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('groupArray')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['group']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['group']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['group']['total']);
?>
    <tr> 
      <td><input type="checkbox" name="groupids[]" value="<?php echo $_smarty_tpl->getVariable('groupArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'];?>
" />&nbsp;</td> 
      <td style="text-align:left;"><?php echo $_smarty_tpl->getVariable('groupArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['groupname'];?>
</td> 
      <td><?php echo $_smarty_tpl->getVariable('groupArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['createtime'];?>
</td> 
      <td><?php echo $_smarty_tpl->getVariable('groupArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['createby'];?>
</td>
      <td><?php echo $_smarty_tpl->getVariable('groupArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['backup'];?>
</td>
      <!--<td><a href="wxgroupuser.php?action=groupusermanage&groupid=<?php echo $_smarty_tpl->getVariable('groupArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['group']['index']]['id'];?>
">查看</a></td>-->
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
//-->
</script> 

