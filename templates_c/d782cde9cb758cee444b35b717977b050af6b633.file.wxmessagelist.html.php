<?php /* Smarty version Smarty-3.0.7, created on 2016-01-05 10:42:06
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/wxmessagelist.html" */ ?>
<?php /*%%SmartyHeaderCode:1339064169568b2d7e8fa715-35367196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd782cde9cb758cee444b35b717977b050af6b633' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/wxmessagelist.html',
      1 => 1451961723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1339064169568b2d7e8fa715-35367196',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/virtual/bangmaisiw/home/wwwroot/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>微信功能 &gt;&gt; 微信消息管理</dt> 
        <dd> 
           <!-- <a href="?action=delete" class="link">删除</a>-->
        </dd> 
   </dl> 
</div> 

<form action="" method="get" id="searchForm"> 
<div class="wrap title"> 
	<dl> 
    	<dt <dt style="width: 800px;">
    		微信消息
    		<div style="color: red;">(请在消息发送的24小时内完成回复，超过后无法回复)</div>
    	</dt> 
        <dd>        
        <!--<input type="text" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
" title="根据名称搜索" onfocus="this.value='';" /> 
        <input type="submit" name="button" id="btnSearch" value=" 搜 索 " /> -->
        </dd> 
    </dl>
</div> 
</form> 

<div class="wrap"> 
  <table width="100%" cellpadding="0" cellspacing="0" class="list"> 
    <thead> 
    <tr> 
      <th><input type="checkbox" id="all" /></th> 
      <th class="text-left">消息类型</th>
      <th>消息内容</th>
      <th>是否回复</th>
      <th>消息创建人</th> 
      <th>消息创建时间</th> 
    </tr>  
     </thead> 
    <tbody> 
    	
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['message']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['name'] = 'message';
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('messageArray')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total']);
?>
    <tr> 
      <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['id'];?>
" />&nbsp;</td> 
      <td style="text-align:left;"><?php echo $_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['msgtype'];?>
</td> 
      <td><?php echo $_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['content'];?>
</td> 
      <td>
      		<?php if ($_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['replycontent']!=''){?>
	      	已回复 <a href="javascript:void(0);" onclick="showsibling(this);">查看回复</a>
	      	<?php }elseif($_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['replycontent']==''){?>
		      	<?php if ($_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['timeInterval']>=24*3600){?>
		      		已超时不能再回复啦
		      	<?php }else{ ?>
		      		未回复 <a href="javascript:void(0);" onclick="showsibling(this);">点击回复</a>
		      	<?php }?>
	      	<?php }?>
      </td>
      <td><?php echo $_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['nickname'];?>
</td>
      <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['createtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
    </tr>
    <tr style="display: none;">
    	<td colspan="6">
    		<form method="post" action="?action=reply"> 
    			<input type="hidden" name="msgid" value="<?php echo $_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['id'];?>
" />
    			<input type="hidden" name="createby" value="<?php echo $_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['createby'];?>
" />
      			<?php if ($_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['replycontent']!=''){?>
	    			<div><?php echo $_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['replycontent'];?>
</div>
		      	<?php }elseif($_smarty_tpl->getVariable('messageArray')->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']]['replycontent']==''){?>
		      		<div><textarea name="content"></textarea></div>
		    		<div><a onclick="reply(this);" class="link">确认回复</a></div>
		      	<?php }?>
      		</form> 
    	</td>
    </tr>
    <?php endfor; else: ?>
    <tr>
        <td colspan="4"><div class="notext">没有相关信息</div></td>
    </tr>
    <?php endif; ?>
    
  
     </tbody> 
    </table> 
 	
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

function showsibling(obj){
	var aimobj = $(obj).parent().parent().next();
	if(aimobj.css("display") == "none") {
		aimobj.show();
		//$(obj).text("收起<<");
	} else {
		aimobj.hide();
		//$(obj).text("展开>>");
	}
}

function reply(obj){
	var contentObj = $(obj).parent().prev().children(":first");
	//alert(contentObj.val());
	
	if(!!! contentObj.val()){
		alert("请输入回复内容");
		return;
	}
	if(confirm("确认回复?")) {
		$(obj).parent().parent().submit();
	}
}

//-->
</script> 

