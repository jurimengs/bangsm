<?php /* Smarty version Smarty-3.0.7, created on 2016-01-13 11:07:12
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/sysadmin/yuyue.html" */ ?>
<?php /*%%SmartyHeaderCode:9774582415695bf60b69ef2-05928441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '439642b01427fb228645425bebfc2250cd76751e' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/sysadmin/yuyue.html',
      1 => 1452591057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9774582415695bf60b69ef2-05928441',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/virtual/bangmaisiw/home/wwwroot/wap/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="wrap map">
    <dl>
        <dt>预约系统 &gt;&gt; 预约信息</dt>
        <dd>
            <a href="?" class="link">预约信息</a>
            <!-- <a href="?action=tj" class="link">添加会员</a>  -->
        </dd>
    </dl>
</div>

<?php if ($_smarty_tpl->getVariable('action')->value==''){?>
<form action="" method="get" id="searchForm">
    <div class="wrap title">
        <dl>
            <dt style="padding-top:5px">预约信息</dt>
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
                <th>姓名</th>

                <th>预约时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('userList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <tr onclick="show(<?php echo $_smarty_tpl->getVariable('userList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
);" style="cursor:pointer">
                <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->getVariable('userList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" /></td>
                <td><?php echo $_smarty_tpl->getVariable('userList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['username'];?>
</td>

                <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('userList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['time'],"%Y-%m-%d %H:%M:%S");?>
</td>
                <td><a href="?action=bj&id=<?php echo $_smarty_tpl->getVariable('userList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" class="edit">查看</a></td>
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
    <div class="desc"></div>
</div>
<?php }elseif($_smarty_tpl->getVariable('action')->value=="bj"){?>

<div class="wrap title">
    <dl>
        <dt>查看预约信息</dt>
        <dd>

        </dd>
    </dl>
</div>

<div class="wrap" style=" position:relative;">
    <form id="form1" name="form1" method="post" action="?action=edit">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('user')->value['id'];?>
" />
        <table class="add">

            <tr><th>项目主题：</th><td><?php echo $_smarty_tpl->getVariable('user')->value['title'];?>
</td></tr>
            <tr><th>项目日期：</th><td><?php echo $_smarty_tpl->getVariable('user')->value['date'];?>
</td></tr>
            <tr><th>项目人数：</th><td><?php echo $_smarty_tpl->getVariable('user')->value['num'];?>
</td></tr>
            <tr><th>姓名：</th><td><?php echo $_smarty_tpl->getVariable('user')->value['username'];?>
</td></tr>
            <tr><th>联系方式：</th><td><?php echo $_smarty_tpl->getVariable('user')->value['phone'];?>
</td></tr>
            <tr><th style=" width:200px;">是否参加过类似项目主题：</th><td><?php if ($_smarty_tpl->getVariable('user')->value['unit']==1){?>是<?php }else{ ?>否<?php }?></td></tr>
            <tr><th>单位名称：</th><td><?php echo $_smarty_tpl->getVariable('user')->value['unit'];?>
</td></tr>
            <tr><th>客户需求描述：</th><td><?php echo $_smarty_tpl->getVariable('user')->value['demand'];?>
</td></tr>
            <tr><th>主要问题和目标：</th><td><?php echo $_smarty_tpl->getVariable('user')->value['fq'];?>
</td></tr>
            <tr><th>期望项目效果：</th><td><?php echo $_smarty_tpl->getVariable('user')->value['expect'];?>
</td></tr>
            <tr><th>其他说明：</th><td><?php echo $_smarty_tpl->getVariable('user')->value['other'];?>
</td></tr>
            <tr><th>提交时间：</th><td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('user')->value['time'],"%Y-%m-%d %H:%M:%S");?>
</td></tr>
            <tr>
                <th></th>
                <td>

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
        $("#form2").validate({
            rules: {
                title: {required: true},
                contents: {required:true},
                level:"required"
            },
            errorPlacement: function(error, element) { //指定错误信息位置
                if (element.is(':radio') || element.is(':checkbox')) {  //如果是radio或checkbox
                    var eid = element.attr('name');  //获取元素的name属性
                    error.appendTo(element.parent());    //将错误信息添加当前元素的父结点后面
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function (form) {
                $("#btnSubmit").attr("disabled",true);
                form.submit();
            }

        });
    })

    $(document).ready(function() {
        $("#form1").validate({
            rules: {
                user_id: { required: true,minlength:5 },
                password:{required:true,minlength:5},
                confirmpassword:{required:true,equalTo: "#password"},
                uname:{required:true},
                ads:{required:true},
                tel:{required:true},
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
</script>

