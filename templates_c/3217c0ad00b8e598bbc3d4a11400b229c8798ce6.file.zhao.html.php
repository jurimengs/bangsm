<?php /* Smarty version Smarty-3.0.7, created on 2015-11-04 09:03:12
         compiled from "G:/wamp/www//jl/templates\sysadmin/zhao.html" */ ?>
<?php /*%%SmartyHeaderCode:95485639c9d03d5116-52209976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3217c0ad00b8e598bbc3d4a11400b229c8798ce6' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\sysadmin/zhao.html',
      1 => 1446627790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95485639c9d03d5116-52209976',
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
        <dt>留言系统 &gt;&gt; 留言管理</dt> 
   </dl> 
</div> 

<?php if ($_smarty_tpl->getVariable('action')->value==''){?>
<form action="" method="get" id="searchForm">
    <input type="hidden" id="tid" value="" />
<div class="wrap title"> 
	<dl> 
    	<dt>留言信息</dt> 
        <dd>        
        </dd> 
    </dl>
</div> 
</form> 
 
<div class="wrap"> 
<form method="post" action="?action=delete" id="form1"> 
  <table width="100%" cellpadding="0" cellspacing="0" class="list"> 
    <thead> 
    <tr>
        <th style="width:50px;"><input type="checkbox" id="all" /></th>
        <th class="text-left">姓名</th>

        <th>提交日期</th>
        <th>性别</th>
        <th>联系电话</th>
        <th>操作</th>
    </tr>  
     </thead> 
    <tbody  id="charu">
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['name'] = 'list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['list']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('list')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" /></td> 
      <td style="text-align:left;"><?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['username'];?>
</td> 
      <td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['time'],"%Y/%m/%d");?>
</td>
      <td><?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['gender'];?>
</td>
      <td><?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['phone'];?>
</td>
      <td><a href="?action=bj&id=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['list']['index']]['id'];?>
" class="edit">查看</a></td>
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
            <dt>
            <input type="submit" name="btnDelete" value="删除" onclick="return listsc(this.form.name);" id="btnDelete" />
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




<?php }elseif($_smarty_tpl->getVariable('action')->value=="bj"){?>
<div class="wrap title"> 
	<dl> 
    	<dt>查看留言</dt> 

    </dl>
</div> 

<div class="wrap">
<form id="form1" name="form1" method="post" action="?action=edit"> 
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('product')->value['id'];?>
" /> 
<table class="add">
<tr>
    <th>姓名：</th>
    <td>
    <input readonly="readonly"  name="title" maxlength="50" type="text" class="input" id="title" style="width:400px;" value="<?php echo $_smarty_tpl->getVariable('product')->value['username'];?>
" /> 
    </td>
</tr>


    <tr >
        <th>提交时间：</th>
        <td>
           <input readonly="readonly"  type="text" name="time1" class="input"  value=" <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('product')->value['time'],"%Y-%m-%d");?>
" style="width:400px;"/>
        </td>
    </tr>
          <tr >
        <th>联系电话：</th>
        <td>
           <input readonly="readonly"  type="text" name="phone" value="<?php echo $_smarty_tpl->getVariable('product')->value['phone'];?>
" style="width:400px;" class="input"/>
        </td>
    </tr>
       <tr >
        <th>Email：</th>
        <td>
           <input readonly="readonly"  type="text" name="phone" value="<?php echo $_smarty_tpl->getVariable('product')->value['email'];?>
" style="width:400px;" class="input"/>
        </td>
    </tr>
         <tr >
        <th>性别：</th>
        <td>
           <input readonly="readonly"  type="text" name="emali" value="<?php echo $_smarty_tpl->getVariable('product')->value['gender'];?>
" style="width:400px;" class="input"/>
        </td>
    </tr>
<tr>
    <th>建议内容：</th>
    <td>
    <textarea id="contents" name="" style="width:40%;height:30%;" class="input"><?php echo $_smarty_tpl->getVariable('product')->value['contents'];?>
</textarea>
    </td>
</tr>

<tr>
	<th></th>
    <td>
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
    function px_shang(obj){
        var dangqian="";
        $(obj).parent().parent().find("input[type=checkbox]").each(function(i){
            dangqian=$(this).val();
            //alert("sdasadas");
            $(this).attr("checked", false);
        });
        //ajax begin
        $.ajax({
            //async: false,
            type:"post",
            data:("xuhao="+dangqian+"&table="+$("#table").val()+"&weizhi=up&pageno="+$("#pageno").val()+"&tid="+$("#tid").val()),
            url:"paixu.php",
            success: function(data){
                if(data==1)
                {
                    alert("非正常访问");
                }
                else if(data==2){
                    alert("排序失败");
                }
                else if(data==3){
                    alert("已至顶");
                }
                else{
                    panduanshuju(data);
                }
            }
        })
        //ajaxend
    }
    function px_xia(obj){
        var dangqian="";
        $(obj).parent().parent().find("input[type=checkbox]").each(function(i){
            dangqian=$(this).val();
            //alert("sdasadas");
            $(this).attr("checked", false);
        });
        //ajax begin
        $.ajax({
            async: false,
            type:"post",
            data:("xuhao="+dangqian+"&table="+$("#table").val()+"&weizhi=down&pageno="+$("#pageno").val()+"&tid="+$("#tid").val()),
            url:"paixu.php",
            success: function(data){
                if(data==1)
                {
                    alert("非正常访问");
                }
                else if(data==2){
                    alert("排序失败");
                }
                else if(data==3){
                    alert("已至顶");
                }
                else{
                    panduanshuju(data);
                }
            }
        })
    }

    function panduanshuju(obj){
        var newarray=new Array();
        newarray=obj.split('*');
        var newarray2=new Array();
        for(var i=0;i<newarray.length;i++)
        {
            newarray2[i]=newarray[i].split("|");
        }
        $("#charu").html("");
        //<!--<td><img src=\"images/pic.gif\" onmouseover=\"javascript:ddrivetip('<img width=120 src=../"+newarray2[i][3]+">','#ffffff', 120)\" onmouseout=\"hideddrivetip()\" /></td>-->
        for(var i=0;i<newarray2.length;i++){
            var guodu="<tr><td><input type=\"checkbox\" name=\"id[]\" value="+newarray2[i][0]+" /></td><td style=\"text-align:left;\">"+newarray2[i][1]+"</td><td>"+newarray2[i][2]+"</td>"
                    +"<td style=\"display:none\"><img src=\"images/pic.gif\" onmouseover=\"javascript:ddrivetip('<img width=120 src=../"+newarray2[i][4]+">','#ffffff', 120)\" onmouseout=\"hideddrivetip()\" /></td>"
                    +"<td>"+newarray2[i][5]+"</td><td><span name=\"pxs[]\" onclick=\"px_shang(this)\"><img src=\"top.png\" /></span></td><td><span name=\"pxx[]\" onclick=\"px_xia(this)\"><img src=\"down.png\" /></span></td>"
                    +"<td>"+newarray2[i][3]+"</td><td><a href=\"?action=bj&type_id="+newarray2[i][6]+"&id="+newarray2[i][0]+"\" class=\"edit\">修改</a></td></tr>";

            $("#charu").append(guodu);
        }
        // $("#charu").append("<tr><td colspan=\"8\"><div class=\"notext\">没有相关信息</div></td></tr>");
        //alert($("#charu").html());
    }

    //-=-----------------------------------

</script> 


 
 
