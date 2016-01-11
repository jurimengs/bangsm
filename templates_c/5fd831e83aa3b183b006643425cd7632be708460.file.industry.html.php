<?php /* Smarty version Smarty-3.0.7, created on 2015-10-29 06:32:13
         compiled from "G:/wamp/www//jl/templates\sysadmin/industry.html" */ ?>
<?php /*%%SmartyHeaderCode:222005631bd6d0f6826-35850767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd831e83aa3b183b006643425cd7632be708460' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\sysadmin/industry.html',
      1 => 1445910469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222005631bd6d0f6826-35850767',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'G:\wamp\www\jl\smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map"> 
    <dl> 
        <dt>文章系统 &gt;&gt; 文章管理</dt>
        <dd>
            <a href="?type_id=<?php echo $_smarty_tpl->getVariable('type_id')->value;?>
" class="link">文章信息</a>
            <a href="?action=tj&type_id=<?php echo $_smarty_tpl->getVariable('type_id')->value;?>
" class="link">添加文章</a>
        </dd>

   </dl>
</div>
<?php if ($_smarty_tpl->getVariable('action')->value==''){?>
<form action="" method="get" id="searchForm">
    <input type="hidden" id="table"  value="<?php echo $_smarty_tpl->getVariable('table')->value;?>
"  />
    <input type="hidden" id="pageno" value="<?php echo $_smarty_tpl->getVariable('pageno')->value;?>
" />
    <input type="hidden" id="tid" value="<?php echo $_smarty_tpl->getVariable('tid')->value;?>
" />
<div class="wrap title">
	<dl>
    	<dt>文章信息</dt>
        <dd>
        <select id="type_id" name="type_id">
        <option value="">﹄ 请选择...</option>
          <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('typeList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
          <?php if ($_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id']==$_smarty_tpl->getVariable('type_id')->value){?>
          <option value="<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" selected="selected"><?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['level'];?>
﹄ <?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
          <?php }else{ ?>
          <option value="<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['level'];?>
﹄ <?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
          <?php }?>
          <?php endfor; endif; ?>
          </select>
        <input type="text" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
" title="根据根据文章名称和编号搜索" onfocus="this.value='';" />
        <input type="submit" name="button" id="btnSearch" value=" 搜 索 " />
        </dd>
    </dl>
</div>
</form>

<div class="wrap">
<form method="post" action="?action=delete&type_id=<?php echo $_smarty_tpl->getVariable('type_id')->value;?>
" id="form1">
  <table width="100%" cellpadding="0" cellspacing="0" class="list">
    <thead>
    <tr>
        <th style="width:50px;"><input type="checkbox" id="all" /></th>
        <th class="text-left">文章名称</th>
        <th>文章分类</th>
        <th style="display:none">图片</th>
        <th>排序</th>
        <th>推荐到首页</th>
        <th>发布日期</th>
        <th>操作</th>
    </tr>
     </thead>
    <tbody  id="charu">
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('productList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" /></td>
      <td style="text-align:left;"><?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['title'];?>
</td>
      <td><?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['type_name'];?>
</td>
      <td style="display:none"><img src="images/pic.gif" onmouseover="javascript:ddrivetip('<img width=120 src=../<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['simage'];?>
>','#ffffff', 120)" onmouseout="hideddrivetip()" /></td>
      <td><?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['sort'];?>
</td>
      <td><?php if ($_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['tuijian']==1){?>已推荐<?php }else{ ?>未推荐<?php }?></td>
      <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['time'],"%Y-%m-%d");?>
</td>
      <td><a href="?action=bj&type_id=<?php echo $_smarty_tpl->getVariable('type_id')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" class="edit">修改</a></td>
    </tr>
    <?php endfor; else: ?>
    <tr>
        <td colspan="9"><div class="notext">没有相关信息</div></td>
    </tr>
    <?php endif; ?>


     </tbody>
    </table>

    <div class="page">
        <dl>
            <dt><input type="submit" name="btnDelete" value="删除" onclick="return listsc(this.form.name);" id="btnDelete" />
                <input type="submit" name="btntj" value="加入推荐" onclick="return listtj(this.form.name);" id="btntj" />
                <input type="submit" name="btnqxtj" value="取消推荐" onclick="return listqxtj(this.form.name);" id="btnqxtj" />
                <input type="hidden" name="yincang" id="yincang" />
            </dt>
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
    	<dt>添加文章</dt>
        <dd>
        <span class="red">*</span>号为必填项
        </dd>
    </dl>
</div>

<div class="wrap">
<form id="form1" name="form1" method="post" action="?action=add&type_id=<?php echo $_smarty_tpl->getVariable('type_id')->value;?>
">
<table class="add">
<tr>
    <th>文章名称：<font class="red">*</font></th>
    <td>
    <input name="title" maxlength="50" type="text" class="input" id="title" style="width:400px;" />
    </td>
</tr>

<tr>
    <th>文章分类：<font class="red">*</font></th>
    <td>
    <select id="type_id" name="type_id">
    <option value="">﹄ 请选择...</option>
      <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('typeList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <?php if ($_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id']==$_smarty_tpl->getVariable('type_id')->value){?>
          <option value="<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" selected="selected"><?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['level'];?>
﹄ <?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
          <?php }else{ ?>
          <option value="<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['level'];?>
﹄ <?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
          <?php }?>
      <?php endfor; endif; ?>
      </select>
     </td>
</tr>
    <tr>
        <th>排序：<font class="red">*</font></th>
        <td>
            <input name="sort" type="text" class="input" value="0" id="sort" maxlength="5" style="width:50px;" onKeyUp="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"/>
        </td>
    </tr>
    <tr style="display:none">
        <th>招聘人数：</th>
        <td><input name="num" type="text" class="input" value="0" id="num" maxlength="5" style="width:50px;" onKeyUp="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"/></td>
    </tr>
<tr >
    <th>上传图片：</th>
    <td>
    <input name="image" maxlength="100" type="text" class="input" id="image" style="width:400px;" />
    <input type="checkbox" id="autoSimg" onclick="showSmallImg(this.checked);" checked="checked" />自动生成缩略图
    <br />
    <input id="image_upload" type="file" name="Filedata" />
    <span class="imgbox"><img src="images/empty.gif" height="38" id="pic" style="margin-top:8px;"  /></span>
    </td>
</tr>
<tr id="small_img" >
    <th>上传缩略图片：</th>
    <td>
    <input name="simage" maxlength="100" type="text" class="input" id="simage" style="width:400px;" />
    <br />
    <input id="simage_upload" type="file" name="Filedata" />
    <span class="imgbox"><img src="images/empty.gif" height="38" id="spic" style="margin-top:8px;" /></span>
    </td>
</tr>
    <tr id="ziliaotr" style="display:none;">
        <th>上传资料：</th>
        <td>
            <input name="ziliao" maxlength="100" type="text" class="input" id="ziliao" style="width:400px;" /> <br />
            <input id="ziliao_upload" type="file" name="Filedata" />
        </td>
    </tr>
<tr>
    <th>文章关键字：</th>
    <td>
    <textarea style=" width:79%; height:50px;" name="keywords" class="input" id="keywords"></textarea>
    <span>网页SEO优化，多个用","号隔开</span>
    </td>
</tr>
<tr>
    <th>简单描述：</th>
    <td>
    <textarea style=" width:79%; height:50px;" name="description" class="input" id="description"></textarea>
    <span>网页SEO优化，文章的简单描述</span>
    </td>
</tr>
<tr>
    <th>文章描述：</th>
    <td>
    <textarea id="contents" name="contents" style="width:79%;"></textarea>
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
    	<dt>修改文章</dt>
        <dd>
        <span class="red">*</span>号为必填项
        </dd>
    </dl>
</div>

<div class="wrap">
<form id="form1" name="form1" method="post" action="?action=edit&type_id=<?php echo $_smarty_tpl->getVariable('type_id')->value;?>
">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('product')->value['id'];?>
" />
<table class="add">
<tr>
    <th>文章名称：<font class="red">*</font></th>
    <td>
    <input name="title" maxlength="50" type="text" class="input" id="title" style="width:400px;" value="<?php echo $_smarty_tpl->getVariable('product')->value['title'];?>
" />
    </td>
</tr>
<tr>
    <th>文章分类：<font class="red">*</font></th>
    <td>
    <select id="type_id" name="type_id">
      <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('typeList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <?php if ($_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['selected']=='true'){?>
      <option value="<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" selected="selected"><?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['level'];?>
﹄ <?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
      <?php }else{ ?>
      <option value="<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['level'];?>
﹄ <?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
      <?php }?>
      <?php endfor; endif; ?>
      </select>
      </td>
</tr>
    <tr>
        <th>排序：<font class="red">*</font></th>
        <td>
            <input name="sort" type="text" class="input" value="<?php echo $_smarty_tpl->getVariable('product')->value['sort'];?>
" id="sort" maxlength="5" style="width:50px;" onKeyUp="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"/>
        </td>
    </tr>

<tr>
    <th>上传文章图片：</th>
    <td>
    <input name="image" maxlength="100" type="text" class="input" id="image" style="width:400px;" value="<?php echo $_smarty_tpl->getVariable('product')->value['image'];?>
" />
    <input type="checkbox" id="autoSimg" onclick="showSmallImg(this.checked);" checked="checked" />自动生成商品缩略图
    <br />
    <input id="image_upload" type="file" name="Filedata" />
    <span class="imgbox"><img <?php if ($_smarty_tpl->getVariable('product')->value['image']!=''){?>src="../<?php echo $_smarty_tpl->getVariable('product')->value['image'];?>
"<?php }else{ ?>src="images/empty.gif"<?php }?> height="38" id="pic" style="margin-top:8px;"  /></span>
    </td>
</tr>
<tr id="small_img">
    <th>上传文章缩略图片：</th>
    <td>
    <input name="simage" maxlength="100" type="text" class="input" id="simage" style="width:400px;" value="<?php echo $_smarty_tpl->getVariable('product')->value['simage'];?>
" />
    <br />
    <input id="simage_upload" type="file" name="Filedata" />
    <span class="imgbox"><img <?php if ($_smarty_tpl->getVariable('product')->value['simage']!=''){?>src="../<?php echo $_smarty_tpl->getVariable('product')->value['simage'];?>
"<?php }else{ ?>src="images/empty.gif"<?php }?> height="38" id="spic" style="margin-top:8px;" /></span>
    <td>
</tr>
    <tr id="ziliaotr" style="display:none;">
        <th>上传资料：</th>
        <td>
            <input name="ziliao" maxlength="100" type="text" class="input" id="ziliao" style="width:400px;" /> <br />
            <input id="ziliao_upload" type="file" name="Filedata" />
        </td>
    </tr>
<tr>
    <th>文章关键字：</th>
    <td>
    <textarea style=" width:79%; height:50px;" name="keywords" class="input" id="keywords"><?php echo $_smarty_tpl->getVariable('product')->value['keywords'];?>
</textarea>
    <span>网页SEO优化，多个用","号隔开</span>
    </td>
</tr>
<tr>
    <th>简单描述：</th>
    <td>
    <textarea style=" width:79%; height:50px;" name="description" class="input" id="description"><?php echo $_smarty_tpl->getVariable('product')->value['description'];?>
</textarea>
    <span>网页SEO优化，文章的简单描述</span>
    </td>
</tr>

<tr>
    <th>文章描述：</th>
    <td>
    <textarea id="contents" name="contents" style="width:79%;"><?php echo $_smarty_tpl->getVariable('product')->value['contents'];?>
</textarea>
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

    $(document).ready(function() {
        //表单验证
        $("#form1").validate({
            rules: {
                title: {required: true},
  				type_id:{ required:true},
  				sort:{ required:true}
            },
			submitHandler: function (form) {
				$("#btnSubmit").attr("disabled",true);
				$("#contents").val(editor.html());	//解决shosen.jquery冲突，取不到值
				form.submit();
			}
        });
    })
   var editor1;
KindEditor.ready(function(K) {
	editor1 = K.create('textarea[name="contents"]', {
		allowFileManager : true,
		filterMode:false
	});
}); 
    $(function() {
		$('#simage_upload').uploadify({
		  'uploader'  : 'jquery/uploadify/uploadify.swf',
		  'script'    : 'jquery/uploadify/uploadify.php',
		  'folder'	  : '../uploads/product/',
		  'cancelImg' : 'jquery/uploadify/cancel.png',
		  'removeCompleted' : true,
		  'auto':true,
		  'buttonText': 'SELECT IMAGE',
		  'fileExt'     : '*.jpg; *.gif; *.png',
		  'fileDesc'    : 'Select Files *.jpg; *.gif; *.png',
		  'onCancel'    : function(event,ID,fileObj,data) {
      		  $("#btnSubmit").attr("disabled",false);
    	  },
		  'onSelect':function(event,ID,fileObj) {
			  $("#btnSubmit").attr("disabled",true);
		  },
		  'onComplete' :function(event,queueID,fileObj,response,data){
			   $("#simage").val(response);
			   $("#spic").attr("src",'../'+response);
			   $("#btnSubmit").attr("disabled",false);
		  }
		});
		showSmallImg($("#autoSimg").attr("checked"));
	});

function showSmallImg(isbool){
	$("#image_upload").next("object").remove();
	$("#image_upload").next("#image_uploadQueue").remove();
	if(isbool){
			$('#image_upload').uploadify({
			  'uploader'  : 'jquery/uploadify/uploadify.swf',
			  'script'    : 'jquery/uploadify/uploadify.php?simg=true_300_300',
			  'folder'	  : '../uploads/product/',
			  'cancelImg' : 'jquery/uploadify/cancel.png',
			  'removeCompleted' : true,
			  'auto':true,
			  'buttonText': 'SELECT IMAGE',
			  'fileExt'     : '*.jpg; *.gif; *.png',
			  'fileDesc'    : 'Select Files *.jpg; *.gif; *.png',
			  'onCancel'    : function(event,ID,fileObj,data) {
	      		  $("#btnSubmit").attr("disabled",false);
	    	  },
			  'onSelect':function(event,ID,fileObj) {
				  $("#btnSubmit").attr("disabled",true);
			  },
			  'onComplete' :function(event,queueID,fileObj,response,data){
				   $("#image").val(response);
				   $("#pic").attr("src",'../'+response);
				   $("#simage").val(response.replace(".","_s."));
				   $("#btnSubmit").attr("disabled",false);
			  }
			});
		$("#small_img").hide();
	}else{
		$("#small_img").show();
		$('#image_upload').uploadify({
			  'uploader'  : 'jquery/uploadify/uploadify.swf',
			  'script'    : 'jquery/uploadify/uploadify.php',
			  'folder'	  : '../uploads/product/',
			  'cancelImg' : 'jquery/uploadify/cancel.png',
			  'removeCompleted' : true,
			  'auto':true,
			  'buttonText': 'SELECT IMAGE',
			  'fileExt'     : '*.jpg; *.gif; *.png',
			  'fileDesc'    : 'Select Files *.jpg; *.gif; *.png',
			  'onCancel'    : function(event,ID,fileObj,data) {
	      		  $("#btnSubmit").attr("disabled",false);
	    	  },
			  'onSelect':function(event,ID,fileObj) {
				  $("#btnSubmit").attr("disabled",true);
			  },
			  'onComplete' :function(event,queueID,fileObj,response,data){
				   $("#image").val(response);
				   $("#pic").attr("src",'../'+response);
				   $("#btnSubmit").attr("disabled",false);
			  }
			});	
	}
}


</script> 


 
 
