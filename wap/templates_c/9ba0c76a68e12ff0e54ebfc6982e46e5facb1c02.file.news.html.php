<?php /* Smarty version Smarty-3.0.7, created on 2016-01-13 11:07:06
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/sysadmin/news.html" */ ?>
<?php /*%%SmartyHeaderCode:18114727395695bf5ae594b6-48659845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ba0c76a68e12ff0e54ebfc6982e46e5facb1c02' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/sysadmin/news.html',
      1 => 1452591056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18114727395695bf5ae594b6-48659845',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("sysadmin/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
                <th style="width: 50px;">编号</th>
                <th class="text-left">文章名称</th>
                <th>标题颜色</th>
                <th>文章分类</th>
                <th>显示状态</th>
                <th>图片</th>
                <th>排序</th>
                <th>发布日期</th>
                <th>操作</th>
                <th>预览效果</th>
            </tr>
            </thead>
            <tbody>
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

            <script  type="text/javascript">
                $(function(){
                    var colorid="#lineColor<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
";
                    var title="#title<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
";
                   /* $(colorid).iColor(function(hx) {
                       //打印日志记录 （控制台可查看） console.log('自定义回调：去掉内容');
                        this.val(hx).css('background', '#' + hx);
                        $(title).css("color","#"+hx);
                    });*/
                });
            </script>

            <tr>
                <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" /></td>
                <td style="width: 50px; "><?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
</td>
                <td <?php if ($_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['color']==0){?> style="text-align:left;"<?php }else{ ?>style="text-align:left;color:red;"<?php }?> id="title<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['title'];?>
</td>
                <td><input type="button" id="lineColor_<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" <?php if ($_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['color']==0){?>style="width:20px;cursor:pointer;"<?php }else{ ?>style="width:20px;background:red;cursor:pointer;"<?php }?>  onclick="updateColor(<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['color'];?>
,<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
);" readonly="readonly" /></td>
                <td><?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['type_name'];?>
</td>
                <td style="cursor: pointer;"><?php if ($_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['view']==0){?><img src="images/error.gif" id="updateIsViewPic_<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" onclick="updateState('updateIsView',<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
);" /><?php }else{ ?><img src="images/success.gif" id="updateIsViewPic_<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" onclick="updateState('updateIsView',<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
);" /><?php }?></td>
                <td><img src="images/pic.gif" onmouseover="javascript:ddrivetip('<img width=120 src=../<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['simage'];?>
>','#ffffff', 120)" onmouseout="hideddrivetip()" /></td>
                <td><?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['sort'];?>
</td>
                <td><?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['time'];?>
</td>
                <td><a href="?action=bj&type_id=<?php echo $_smarty_tpl->getVariable('type_id')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" class="edit">修改</a></td>
                <td><input style="color:#87A34D;cursor: pointer;" type="button" value="浏览" onclick="javascript:window.open('../News-Details.php?id=<?php echo $_smarty_tpl->getVariable('productList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
');"></td>
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
                <dt><input type="submit" name="btnDelete" value="删除" onclick="return listDelete(this.form.name);" id="btnDelete" /></dt>
                <dd>
                    <?php echo $_smarty_tpl->getVariable('pager')->value;?>

                </dd>
            </dl>
        </div>
    </form>
    <div class="desc">*</div>
    
    <script type="text/javascript">

        //更新显示状态
        function updateState(type,id){
            $.ajax({
                type: "get",
                url: 'news.php',
                data: {action:'view',id:id},
                success: function(msg){
                    if(msg!='-1'){
                        if(msg=='0'){
                            $("#"+type+"Pic_"+id).attr("src","images/success.gif");
                        }else{
                            $("#"+type+"Pic_"+id).attr("src","images/error.gif");
                        }
                    }else{
                        alert('更改状态失败');
                    }
                },
                error:function(msg){
                    alert(msg);
                }
            });
        }
        //Color
        function updateColor(color,id){

                $.ajax({
                    type: "get",
                    url: 'news.php',
                    data: {action:'color',id:id},
                    success: function(msg){
                        if(msg!='-1'){
                            if(msg=='0'){
                                $("#title"+id).css("color","red");
                                $("#lineColor_"+id).css("background","red");
                            }else{
                                $("#title"+id).css("color","#222");
                                $("#lineColor_"+id).css("background","#F0F0F0");
                            }
                        }else{
                            alert('更改颜色失败');
                        }
                    },
                    error:function(msg){
                        alert(msg);
                    }
                });

        }
    </script>
    
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
            <tr>
                <th>排序：<font class="red">*</font></th>
                <td>
                    <input name="sort" type="text" class="input" value="0" id="sort" maxlength="5" style="width:50px;" onKeyUp="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"/>
                    <span>前台显示列表排序规则是由纯数字化排序《数字由小到大》。</span>
                </td>
            </tr>
            <tr>
                <th>是否显示：</th>
                <td>
                    <input name="view" type="radio" value="1" /> 是
                    <input name="view" type="radio" value="0" checked="checked"/> 否
                </td>
            </tr>
            <tr>
                <th>是否加深标题颜色：</th>
                <td>
                    <input name="color" type="radio" value="1" /> 是
                    <input name="color" type="radio" value="0" checked="checked"/> 否
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
                    <textarea id="contents" name="contents"></textarea>
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
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../ckfinder/ckfinder.js"></script>
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
            <tr>
                <th>排序：<font class="red">*</font></th>
                <td>
                    <input name="sort" type="text" class="input" value="<?php echo $_smarty_tpl->getVariable('product')->value['sort'];?>
" id="sort" maxlength="5" style="width:50px;" onKeyUp="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')"/>
                    <span>前台显示列表排序规则是由纯数字化排序《数字由小到大》。</span>
                </td>
            </tr>
            <tr>
                <th>是否显示：</th>
                <td>
                    <input name="view" type="radio" value="1"<?php if ($_smarty_tpl->getVariable('product')->value['view']==1){?> checked="checked"<?php }?> /> 是
                    <input name="view" type="radio" value="0"<?php if ($_smarty_tpl->getVariable('product')->value['view']==0){?> checked="checked"<?php }?> /> 否
                </td>
            </tr>
            <tr>
                <th>是否加深标题颜色：</th>
                <td>
                    <input name="color" type="radio" value="1"<?php if ($_smarty_tpl->getVariable('product')->value['color']==1){?> checked="checked"<?php }?> /> 是
                    <input name="color" type="radio" value="0"<?php if ($_smarty_tpl->getVariable('product')->value['color']==0){?> checked="checked"<?php }?> /> 否
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
                    <textarea id="contents" name="contents"><?php echo $_smarty_tpl->getVariable('product')->value['contents'];?>
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



    <!--
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
                form.submit();
            }
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

    if($("#contents").val()!=undefined){
        var editor = CKEDITOR.replace( 'contents' );
        CKFinder.setupCKEditor( editor, '../ckfinder/' ) ;
    }
    //-->

</script>


 
 
