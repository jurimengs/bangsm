<?php /* Smarty version Smarty-3.0.7, created on 2016-01-08 02:53:35
         compiled from "E:/wamp/www//yanqi/templates\sysadmin/product_type.html" */ ?>
<?php /*%%SmartyHeaderCode:3531568f24afb46612-46550986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21b9e37af5ee6ea77abea727d822ee0c4107a177' => 
    array (
      0 => 'E:/wamp/www//yanqi/templates\\sysadmin/product_type.html',
      1 => 1452176029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3531568f24afb46612-46550986',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map">
    <dl>
        <dt>文章系统 &gt;&gt; 分类管理</dt>
        <dd>
            <a href="?" class="link">分类信息</a>
            <!--<a href="?action=tj" class="link">添加分类</a>-->
        </dd>
    </dl>
</div>

<?php if ($_smarty_tpl->getVariable('action')->value==''){?>

<div class="wrap title">
    <dl>
        <dt>分类信息</dt>
        <dd>

        </dd>
    </dl>
</div>
<div class="wrap">
    <table width="100%" cellpadding="0" cellspacing="0" class="list" id="list-table">
        <thead>
        <tr>
            <th class="text-left" style="padding-left:10px;">分类名称</th>
            <th>文章数量</th>
            <th>排序</th>
            <th style="width:200px;">操作</th>
        </tr>
        </thead>
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
        <tr class="<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['parent_id'];?>
" id="<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['parent_id'];?>
_<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
">
            <td style="padding-left:10px; text-align:left">
                <?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['level'];?>

                <img src="images/menu_minus.gif" id="icon_<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['parent_id'];?>
_<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" width="9" height="9" border="0" onclick="rowClicked(this)" />
                <a href="product.php?type_id=<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
"><u><?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</u></a></td>
            <td><?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['product_count'];?>
</td>
            <td><?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['sort'];?>
</td>
            <td>
                <a href="?action=bj&id=<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" class="edit">修改</a>
                <a href="?action=delete&id=<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" onclick="return confirm('确定删除吗？')" class="delete">删除</a>
            </td>
        </tr>
        <?php endfor; else: ?>
        <tr>
            <td colspan="4"><div class="notext">没有相关信息</div></td>
        </tr>
        <?php endif; ?>

    </table>


    <div class="desc">*</div>
</div>

<?php }elseif($_smarty_tpl->getVariable('action')->value=="tj"){?>
<div class="wrap title">
    <dl>
        <dt>添加分类</dt>
        <dd>
            <span class="red">*</span>号为必填项
        </dd>
    </dl>
</div>

<div class="wrap">
    <form id="form1" name="form1" method="post" action="?action=add">
        <table class="add">
            <tr>
                <th>分类名称：<font class="red">*</font></th>
                <td>
                    <input name="name" maxlength="50" type="text" class="input" id="name" style="width:200px;" />
                </td>
            </tr>
            <tr>
                <th>上级分类：<font class="red">*</font></th>
                <td>
                    <select id="parent_id" name="parent_id">
                        <option value="">﹄ 请选择...</option>
                        <option value="0">﹄ 顶级分类</option>
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
                        <option value="<?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['level'];?>
﹄ <?php echo $_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['name'];?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>排序：<font class="red">*</font></th>
                <td>
                    <input name="sort" type="text" value="0" maxlength="5" class="input" id="sort" style="width:50px;" onKeyUp="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" />
                </td>
            </tr>
            <tr>
                <th>上传图片：</th>
                <td>
                    <input name="image" maxlength="100" type="text" class="input" id="image" style="width:400px;"  /><br />
                    <input id="image_upload" type="file" name="Filedata" />
                    <span class="imgbox"><img src="images/empty.gif" height="38" id="pic" style="margin-top:8px;"  /></span>
                </td>
            </tr>
            <tr>
                <th>描述：</th>
                <td>
                    <textarea style=" width:400px; height:50px;" name="description" class="input" id="description"></textarea>
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
        <dt>修改分类</dt>
        <dd>
            <span class="red">*</span>号为必填项
        </dd>
    </dl>
</div>

<div class="wrap">
    <form id="form1" name="form1" method="post" action="?action=edit">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('type')->value['id'];?>
" />
        <table class="add">
            <tr>
                <th>分类名称：<font class="red">*</font></th>
                <td>
                    <input name="name" maxlength="50" type="text" class="input" id="name" style="width:200px;" value="<?php echo $_smarty_tpl->getVariable('type')->value['name'];?>
" />    </td>
            </tr>
            <tr>
                <th>上级分类：<font class="red">*</font></th>
                <td>
                    <select id="parent_id" name="parent_id">
                        <option value="0">﹄ 顶级分类</option>
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
                        <?php if ($_smarty_tpl->getVariable('typeList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id']==$_smarty_tpl->getVariable('type')->value['parent_id']){?>
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
                    <input name="sort" type="text" value="<?php echo $_smarty_tpl->getVariable('type')->value['sort'];?>
" maxlength="5" class="input" id="sort" style="width:50px;" onKeyUp="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" />
                </td>
            </tr>
            <tr>
                <th>上传图片：</th>
                <td>
                    <input name="image" maxlength="100" type="text" class="input" id="image" style="width:400px;" value="<?php echo $_smarty_tpl->getVariable('type')->value['image'];?>
" /><br />
                    <input id="image_upload" type="file" name="Filedata" />
                    <span class="imgbox"><img <?php if ($_smarty_tpl->getVariable('type')->value['image']!=''){?>src="../<?php echo $_smarty_tpl->getVariable('type')->value['image'];?>
"<?php }else{ ?>src="images/empty.gif"<?php }?> height="38" id="pic" style="margin-top:8px;"  /></span>
                </td>
            </tr>
            <tr>
                <th>描述：</th>
                <td>
                    <textarea style=" width:400px; height:50px;" name="description" class="input" id="description"><?php echo $_smarty_tpl->getVariable('type')->value['description'];?>
</textarea>
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
<?php }?>

<script type="text/javascript">
    $(document).ready(function() {
        //表单验证
        $("#form1").validate({
            rules: {
                name: {required: true},
                parent_id: {required:true},
                sort:{ min:false}
            },
            submitHandler: function (form) {
                $("#btnSubmit").attr("disabled",true);
                form.submit();
            }
        });
    })


    $(function() {
        $('#image_upload').uploadify({
            'uploader'  : 'jquery/uploadify/uploadify.swf',
            'script'    : 'jquery/uploadify/uploadify.php',
            'folder'	  : '../uploads/news/',
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
    });
</script>

