<?php /* Smarty version Smarty-3.0.7, created on 2015-10-04 04:26:44
         compiled from "G:/wamp/www//sqs/templates\member.htm" */ ?>
<?php /*%%SmartyHeaderCode:315245610aa84605ba8-11039577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd7dab936debe31b8ad94bee3b6c2c27c8de19b5' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\member.htm',
      1 => 1443932802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315245610aa84605ba8-11039577',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <!--con-->
        <div class="con-warp">
            <div class="zc-con">
                <div class="member">
               <div class="zc-wz">您现在的位置：<a href="index.php">首页</a> > <a href="/login/member.php">会员中心</a></div>
                 <div class="zx-z">
                <ul class="float hy">
                <li class="member-title bold">会员中心</li>
                <li class="xiuz zz" style="cursor: pointer; margin-top: 5px; ">资料修改</li>
                <li class="xium" style="cursor: pointer; margin-top: 5px;">密码修改</li>
                <a href="/sqs//tuichu.php" style="color:#2B2B2B; text-decoration:none;"><li>退出</li></a>
                </ul>
                <ul class="float xiuz1" >
                <form action="?action=xiuz" method="post" class="xiuzfrom">
                <li class="member-right-self">请在这里填写准确的个人资料（已验证过的如果要修改请联系客服） </li>
                <?php if (empty($_smarty_tpl->getVariable('user',null,true,false)->value['username'])){?>
                <li class="member-yx"><img src="../images/mihao.png" /> 邮箱：<input class="member-input" type="text" name="email"/></li>
               <li class="member-yhm" ><img src="../images/mihao.png" /> 用户名：<input class="member-input2" type="text" name="user"/><select class="member-select"><option>公开</option><optgroup></optgroup></select></li>
               <li class="member-yx">手机：<input class="member-input" type="text" name="phone"/></li>
               <li><input type="submit" value="确认修改" class="member-buttom-dl"/></li>
               <?php }else{ ?>
               <li class="member-yx"><img src="../images/mihao.png" /> 邮箱：<input class="member-input" type="text" name="email" value="<?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
"/></li>
               <li class="member-yhm" ><img src="../images/mihao.png" /> 用户名：<input class="member-input2" type="text" name="user" value="<?php echo $_smarty_tpl->getVariable('user')->value['username'];?>
"/><select class="member-select"><option>公开</option><optgroup></optgroup></select></li>
               <li class="member-yx">手机：<input class="member-input" type="text" name="phone" value="<?php echo $_smarty_tpl->getVariable('user')->value['phone'];?>
"/></li>
               <li><input type="submit" value="确认修改" class="member-buttom-dl"/></li>
               <?php }?>
               </form>
                </ul>
                
                <ul class="float xium1" style="display:none;">
                <li  style="padding-right: 150px; color:#322A2A"><h4>修改密码 </h4></li>
                <br>
                <form action="?action=xium" method="post" class="xiumfrom">
                <li style="padding-right: 160px;"><img src="../images/mihao.png" /> 原密码：<input class="member-input" name="paw1"/></li>
               <li style="padding-right: 160px;"><img src="../images/mihao.png" /> 新密码：<input class="member-input2"  namw="paw2" style="width:211px;"/></li>
               <input type="submit" value="确认修改" class="member-buttom-dl"/>
               </form>
                </ul>
                
                
               <div class="clear"></div>
               </div>
               </div>
                <div class="clear"></div>
                </div>
            </div>
        </div>
       
         <!--footer-->
   <?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  <script>
  $(document).ready(function(){
	  $(".xiuz").click(function(){
		  $(".xiuz1").css("display","block");
		  $(".xium1").css("display","none");
		  $(this).addClass('member-zl');
		  $(".xium").removeClass('member-zl');
	  });
	  $(".xium").click(function(){
		  $(".xiuz1").css("display","none");
		  $(".xium1").css("display","block");
		  $(this).addClass('member-zl');
		  $(".xiuz").removeClass('member-zl');
		  $(".xiuz").removeClass('zz');
	  });
	  
	  var demo = $(".xiuzfrom").Validform({
		    btnSubmit: "#btn_sub",
		    btnReset: ".btn_reset",
		    tiptype: 3,
		    label: ".label",
		    showAllError: false,
		    ajaxPost: true,
		    callback: function(data) {
		        if (data.status == 1) {
		            alert(data.info);
		            window.location.href = '?';
		        }
		        else{
		            alert(data.info);
		        }
		    },
		    tiptype:function(msg,o,cssctl){

		    }
		});
	  
	  var demo = $(".xiumfrom").Validform({
		    btnSubmit: "#btn_sub",
		    btnReset: ".btn_reset",
		    tiptype: 3,
		    label: ".label",
		    showAllError: false,
		    ajaxPost: true,
		    callback: function(data) {
		        if (data.status == 1) {
		            alert(data.info);
		            window.location.href = '?';
		        }
		        else{
		            alert(data.info);
		        }
		    },
		    tiptype:function(msg,o,cssctl){

		    }
		});
	  
  });
  </script>  
</body>
</html>
