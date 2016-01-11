<?php /* Smarty version Smarty-3.0.7, created on 2015-12-26 21:29:58
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/admin.html" */ ?>
<?php /*%%SmartyHeaderCode:34537282567e96562ffcc5-35058360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b78b5559a520f262dc0313d830448878059c9cd' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/templates/sysadmin/admin.html',
      1 => 1450341956,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34537282567e96562ffcc5-35058360',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>系统设置 &gt;&gt; 系统管理员</dt> 
        <dd> 
            <a href="?" class="link">管理员信息</a>
            <a href="?action=tj" class="link">添加管理员</a> 
        </dd> 
   </dl> 
</div> 

<?php if ($_smarty_tpl->getVariable('action')->value==''){?>
<form action="" method="get" id="searchForm"> 
<div class="wrap title"> 
	<dl> 
    	<dt>管理员信息</dt> 
        <dd>        
        <input type="text" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
" title="根据用户名或姓名搜索" onFocus="this.value='';" /> 
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
      <th>登录用户名</th> 
      <th>姓名</th>
      <th>角色</th> 
      <th>状态</th> 
      <th>最后登录时间</th> 
      <th>创建时间</th> 
      <th>操作</th> 
    </tr>  
     </thead> 
    <tbody> 
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('adminList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <td><?php if ($_smarty_tpl->getVariable('adminList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id']!=1){?><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->getVariable('adminList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" /><?php }else{ ?>&nbsp;<?php }?></td> 
      <td><?php echo $_smarty_tpl->getVariable('adminList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['user_id'];?>
</td> 
      <td><?php echo $_smarty_tpl->getVariable('adminList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['username'];?>
</td> 
      <td><?php echo $_smarty_tpl->getVariable('adminList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['role_name'];?>
</td> 
      <td><?php if ($_smarty_tpl->getVariable('adminList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['state_name']=='禁止'){?><img src="images/error.gif" /><?php }else{ ?><img src="images/success.gif" /><?php }?></td> 
      <td><?php echo $_smarty_tpl->getVariable('adminList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['last_time'];?>
</td> 
      <td><?php echo $_smarty_tpl->getVariable('adminList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['create_time'];?>
</td> 
      <td><a href="?action=bj&id=<?php echo $_smarty_tpl->getVariable('adminList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" class="edit">修改</a></td> 
    </tr> 
    <?php endfor; else: ?>
    <tr>
        <td colspan="8"><div class="notext">没有相关信息</div></td>
    </tr>
    <?php endif; ?>
    
  
     </tbody> 
    </table> 
 	
    <div class="page"> 
        <dl> 
            <dt><input type="submit" name="btnDelete" value="删除" onClick="return listDelete(this.form.name);" id="btnDelete" /></dt> 
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
    	<dt>添加管理员</dt> 
        <dd>        
        <span class="red">*</span>号为必填项
        </dd> 
    </dl>
</div> 

<div class="wrap">
<form id="form1" name="form1" method="post" action="?action=add"> 
<table class="add">
<tr>
	<th>登录用户名：<font class="red">*</font></th>
    <td>
    <input name="user_id" maxlength="20" type="text" class="input" id="user_id" style="width:200px;" /> 
    <span> 登录用户名不能重复</span>
    </td>    
</tr>
<tr>
	<th>登录密码：<font class="red">*</font></th>
	<td>
    <input name="password" maxlength="20" type="password" class="input" id="password" style="width:200px;" /> 
    <span> 5~20个字符</span>
    </td>    
</tr>
<tr>
	<th>确认登录密码：<font class="red">*</font></th>
	<td>
    <input name="confirmpassword" maxlength="20" type="password" class="input" id="confirmpassword" style="width:200px;" />
    </td> 
</tr>
<tr>
	<th>姓名：<font class="red">*</font></th>
	<td>
    <input name="username" maxlength="20" type="text" class="input" id="username" style="width:200px;" /> 
    </td>
</tr>
<tr>
	<th>邮箱：<font class="red">*</font></th>
	<td>
    <input name="email" maxlength="50" type="text" class="input" id="email" style="width:200px;" /> 
    <span> 找回密码时使用</span>
    </td>    
</tr>
<tr>
	<th>所属角色：<font class="red">*</font></th>
	<td>
    <select id="role_id" name="role_id" style="width:210px;">
    <option value="">﹄ 请选择</option>
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
    <option value="<?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
">﹄ <?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
    <?php endfor; endif; ?>
    </select>
    </td>
</tr>
<tr>
	<th>所属状态：<font class="red">*</font></th>
	<td>
    <select id="state_id" name="state_id" style="width:210px;">
    <option value="">﹄ 请选择</option>
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('stateList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <option value="<?php echo $_smarty_tpl->getVariable('stateList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
">﹄ <?php echo $_smarty_tpl->getVariable('stateList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
    <?php endfor; endif; ?>
    </select>
    </td>
</tr>
<tr>
	<th></th>
	<td>
    <input name="btnSubmit" type="submit" id="btnSubmit" value="确定" /> 
    <input name="btnReset" type="reset" id="btnReset" value="清除" />
    <a href="javascript:history.go(-1);"><input name="btnBack" type="button" id="btnBack" value="返回" /> </a>
    </td>
</tr>

</table>
</form> 
</div> 

<?php }elseif($_smarty_tpl->getVariable('action')->value=="bj"){?>
<div class="wrap title"> 
	<dl> 
    	<dt>修改管理员</dt> 
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
    <input name="user_id" maxlength="20" type="text" class="input" id="user_id" style="width:200px;" value="<?php echo $_smarty_tpl->getVariable('admin')->value['user_id'];?>
" />
    </td> 
</tr>
<tr>
	<th>姓名：<font class="red">*</font></th>
	<td>
    <input name="username" maxlength="20" type="text" class="input" id="username" style="width:200px;" value="<?php echo $_smarty_tpl->getVariable('admin')->value['username'];?>
" /> 
    </td>
</tr>
<tr>
	<th>邮箱：<font class="red">*</font></th>
	<td>
    <input name="email" maxlength="50" type="text" class="input" id="email" style="width:200px;" value="<?php echo $_smarty_tpl->getVariable('admin')->value['email'];?>
" /> 
    <span> 找回密码时使用</span>
    </td>    
</tr>
<?php if ($_smarty_tpl->getVariable('admin')->value['id']!=1){?>
<tr>
	<th>所属角色：<font class="red">*</font></th>
	<td>
    <select id="role_id" name="role_id" style="width:210px;">
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
    <?php if ($_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id']==$_smarty_tpl->getVariable('admin')->value['role_id']){?>
    <option value="<?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" selected="selected">﹄ <?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
    <?php }else{ ?>
    <option value="<?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
">﹄ <?php echo $_smarty_tpl->getVariable('roleList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
    <?php }?>
    <?php endfor; endif; ?>
    </select>
    </td>
</tr>
<tr>
	<th>所属状态：<font class="red">*</font></th>
	<td>
    <select id="state_id" name="state_id" style="width:210px;">
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('stateList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <?php if ($_smarty_tpl->getVariable('stateList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id']==$_smarty_tpl->getVariable('admin')->value['state_id']){?>
    <option value="<?php echo $_smarty_tpl->getVariable('stateList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" selected="selected">﹄ <?php echo $_smarty_tpl->getVariable('stateList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
    <?php }else{ ?>
    <option value="<?php echo $_smarty_tpl->getVariable('stateList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
">﹄ <?php echo $_smarty_tpl->getVariable('stateList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
    <?php }?>
    <?php endfor; endif; ?>
    </select>
    </td>
</tr>
<?php }?>
<tr>
	<th></th>
	<td>
    <input name="btnSubmit" type="submit" id="btnSubmit" value="确定" /> 
    <input name="btnReset" type="reset" id="btnReset" value="清除" /> 
    <a href="javascript:history.go(-1);"><input name="btnBack" type="button" id="btnBack" value="返回" /> </a>
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
			password:{required:true,minlength:5},
			confirmpassword:{required:true,equalTo: "#password"},
			username:{required:true},
			email:{required:true,email:true},
			role_id:{required:true},
			state_id:{required:true}
		},
		submitHandler:function(form){
			$("#btnSubmit").attr("disabled",true);
			form.submit();
		}
	});
})
//-->
</script> 

