<?php /* Smarty version Smarty-3.0.7, created on 2015-12-24 22:41:05
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/role.html" */ ?>
<?php /*%%SmartyHeaderCode:1840643268567c0401d545b8-49433853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd0a1e8585180de6b26797175b807becb71d262a' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/role.html',
      1 => 1450341964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1840643268567c0401d545b8-49433853',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>系统设置 &gt;&gt; 角色管理</dt> 
        <dd> 
            <a href="?" class="link">角色信息</a>
            <a href="?action=tj" class="link">添加角色</a> 
        </dd> 
   </dl> 
</div> 

<?php if ($_smarty_tpl->getVariable('action')->value==''){?>
<form action="" method="get" id="searchForm"> 
<div class="wrap title"> 
	<dl> 
    	<dt>角色信息</dt> 
        <dd>        
        <input type="text" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
" title="根据名称搜索" onfocus="this.value='';" /> 
        <input type="submit" name="button" id="btnSearch" value=" 搜 索 " /> 
        </dd> 
    </dl>
</div> 
</form> 

<div class="wrap"> 
<form method="post" action="?action=delete" id="form1"> 
  <table width="100%" cellpadding="0" cellspacing="0" class="list"> 
    <thead> 
    <tr> 
      <th><input type="checkbox" id="all" /></th> 
      <th class="text-left">角色名称</th> 
      <th>拥有用户数</th> 
      <th>操作</th> 
    </tr>  
     </thead> 
    <tbody> 
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('roleList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
    <tr> 
      <td><?php if ($_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id']!=1){?><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" /><?php }?>&nbsp;</td> 
      <td style="text-align:left;"><?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</td> 
      <td><?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['user_count'];?>
</td> 
      <td>
      <?php if ($_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id']!=1){?>
      <a href="?action=bj&id=<?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" class="edit">修改</a>
      <a href="?action=rolemenu&id=<?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" class="priv">分派权限</a>
      <?php }?>&nbsp;
      </td> 
    </tr> 
    <?php endfor; else: ?>
    <tr>
        <td colspan="4"><div class="notext">没有相关信息</div></td>
    </tr>
    <?php endif; ?>
    
  
     </tbody> 
    </table> 
 	
    <div class="page"> 
        <dl> 
            <dt><input type="submit" name="btnDelete" value="删除" onclick="return listDelete(this.form.name);" id="btnDelete" /></dt> 
            <dd> 
            <?php echo $_smarty_tpl->getVariable('pager')->value;?>
        
			</dd> 
        </dl> 
    </div> 
         
</form> 
<div class="desc">*</div> 
</div> 

<?php }elseif($_smarty_tpl->getVariable('action')->value=="tj"){?>
<div class="wrap title"> 
	<dl> 
    	<dt>添加角色</dt> 
        <dd>        
        <span class="red">*</span>号为必填项
        </dd> 
    </dl>
</div> 

<div class="wrap">
<form id="form1" name="form1" method="post" action="?action=add">
<table class="add">
<tr>
	<th>角色名称：<font class="red">*</font></th>
    <td>
    <input name="name" maxlength="20" type="text" class="input" id="name" style="width:200px;" /> 
    <span>角色名称不能重复</span>
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

<?php }elseif($_smarty_tpl->getVariable('action')->value=="bj"){?>
<div class="wrap title"> 
	<dl> 
    	<dt>修改角色</dt> 
        <dd>        
        <span class="red">*</span>号为必填项
        </dd> 
    </dl>
</div> 

<div class="wrap">
<form id="form1" name="form1" method="post" action="?action=edit"> 
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('role')->value['id'];?>
" /> 
<table class="add">
<tr>
	<th>角色名称：<font class="red">*</font></th>
    <td>
    <input name="name" maxlength="20" type="text" class="input" id="name" style="width:200px;" value="<?php echo $_smarty_tpl->getVariable('role')->value['name'];?>
" /> 
    <span>角色名称不能重复</span>    
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
<?php }elseif($_smarty_tpl->getVariable('action')->value=="rolemenu"){?>
<link rel="stylesheet" type="text/css" href="jquery/dtree/dtree.css" />
<script type="text/javascript" src="jquery/dtree/dtree.js"></script>
<div class="wrap title"> 
	<dl> 
    	<dt>分派权限</dt> 
        <dd>        
        
        </dd> 
    </dl>
</div> 

<div class="wrap">
<form id="rightForm" name="rightForm" method="post" action="?action=edit_rolemenu"> 
<input type="hidden" name="role_id" value="<?php echo $_smarty_tpl->getVariable('role')->value['id'];?>
" /> 
<table class="add">
<tr>
	<th>角色名称：</th>
    <td>
    <?php echo $_smarty_tpl->getVariable('role')->value['name'];?>

    </td>
</tr>
<tr>
	<th></th>
	<td>
	<script type="text/javascript">
	var tree = new dTree('tree','jquery/dtree','rightForm');
	//tree.config.closeSameLevel = true;
	//tree.config.useCookies = false;
	tree.add("0","-1","");
	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('menuList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['list']['total']);
?>
	<?php if ($_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['selected']!="0"){?>
	tree.add("<?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
","<?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['parent_id'];?>
","<?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
","","<?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
","",'','','',1);
	<?php }else{ ?>
	tree.add("<?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
","<?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['parent_id'];?>
","<?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
","","<?php echo $_smarty_tpl->getVariable('menuList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
","",'','','',2);
	<?php }?>
	<?php endfor; endif; ?>
	document.write(tree);
	</script>
	</td>
</tr>
<tr>
	<th></th>
    <td>
    <input name="btnSubmit" type="submit" id="btnSubmit" value="确定" onclick="document.getElementById('rightForm').submit()" /> 
    <input name="btnReset" type="reset" id="btnReset" value="清除" /> 
    <input name="btnBack" type="button" id="btnBack" value="返回" /> 
    </td>
</tr>
</table>
</form> 
<div class="desc">*</div>
</div> 
<?php }?>

 
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
})
//-->
</script> 

