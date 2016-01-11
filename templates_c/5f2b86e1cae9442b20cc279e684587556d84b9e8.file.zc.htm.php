<?php /* Smarty version Smarty-3.0.7, created on 2015-10-09 01:07:02
         compiled from "G:/wamp/www//sqs/templates\zc.htm" */ ?>
<?php /*%%SmartyHeaderCode:668856171336e815a3-79276712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f2b86e1cae9442b20cc279e684587556d84b9e8' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\zc.htm',
      1 => 1443934867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '668856171336e815a3-79276712',
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
                <div class="zc">
                <div class="zc-wz">您现在的位置：<a href="../index.php">首页</a> > <a href="/sqs/login/zc.php">注册会员</a></div>
                <div class="zx-z"> 
                <div class="float zc-title">注册会员</div>
                <div class="float zc-left-bt">
                <div class="zc-bt"><img src="../images/mihao.png" />为必填项</div>
                <ul>
                <form action="" method="post" calss="zcform">
                <li class="zc-yx"><img src="../images/mihao.png" /> 邮箱:<input class="zc-input"  name="email" id="remail"/><input type="button" class="zc-fas" id="youxiang" value="发送邮件"></li>
                <li class="zc-sd">注册后你会收到验证码来进行验证</li>
                <li class="zc-yhm"><img src="../images/mihao.png" /> 用户名:<input class="zc-input"  name="user" id="ruser"/></li>
                <li class="zc-yx"><img src="../images/mihao.png" /> 手机:<input class="zc-input " name="phone" id="rphone"/></li>
                <li class="zc-yx"><img src="../images/mihao.png" /> 密码:<input class="zc-input" name="paw" id="paw" type="password"/></li>
                <li class="zc-qrmm"><img src="../images/mihao.png" /> 确认密码:<input class="zc-input " name="paw2" id="rpaw2" type="password"/></li>
                <li class="zc-yhm"><img src="../images/mihao.png" /> 验证码:<input class="zc-input" name="code" id="rcode"/></li>
                <li><input class="zc-buttom" type="button" value="提交注册"/></li>
                </form>
                </ul>
                  <input type="text" id="yzm" style="display:none;"/>
                </div>
                <div class="float zc-right">
                 <div class="zc-right-lj">
                 立即登录
                 <div class="zc-right-zh">如果你已拥有本站站号，可以直接登录</div>
                 <div><button class="dl"  style="width:90px; line-height:20px;">立即登录</button></div>
                 </div>

                 </div>
                </div>
                <div class="clear"></div>
                </div>
            </div>
        </div>
        <!--footer-->
    <?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
    
    <script>
    //验证码开始

    //验证码结束
    
    $("#youxiang").click(function(){
    	//验证码↓
    		code = "";
    	  var codeLength = 4;//验证码的长度  
    	  var selectChar = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,'a','B','c','D','e','F','g','H','I','J','k','L','M','N','o','P','q','R','S','T','U','V','s','X','y','z');  
    	  for (var i = 0; i < codeLength; i++) {
    	    var charIndex = Math.floor(Math.random() * 36);
    	    code += selectChar[charIndex];
    	  }
		$("#yzm").val(code);
		//验证码↑
    	var ze=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    	 if ($("#remail").val()=="") {  

             alert("请填写邮箱");
             $("#remail").focus(); 
         }
    	 else if(!ze.test($("#remail").val()))
    		 {
    		 alert("邮箱格式不正确");
    		 $("#remail").focus(); 
    		 }
    	 else
    		 {
    		 
    		 $.post(
     				"/login/zc.php?action=you",
     				"email="+$("#remail").val()+"&code="+code,
     				function(date){
					
							alert(date);
					
		     			}
     		);
    		 
    		 }
    });
    </script>
<script>

var ze=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	   $(".zc-buttom").click(function(){
		   var a=0;
	    	 if ($("#remail").val()=="") {  

	              alert("请填写邮箱");
	              $("#remail").focus(); 
	          }
	    	 else if(!ze.test($("#remail").val()))
    		 {
    		 alert("邮箱格式不正确");
    		 $("#remail").focus(); 
    		 }
	    	 else if ($("#ruser").val()=="") {  

	              alert("用户名不能为空");
	              $("#ruser").focus(); 
	          } 
	    	 else  if ($("#rphone").val()=="") {  

	              alert("手机号码不能为空");
	              $("#rphone").focus(); 
	          } 
	    	 else if ($("#rpaw").val()=="") {  

	              alert("密码不能为空");
	              $("#rpaw").focus(); 
	          } 
	    	 else if ($("#rpaw2").val()!=$("#rpaw").val()) {  

	              alert("两次密码要一致");
	              $("#rpaw2").focus(); 
	          } 
	    	 else if ($("#rcode").val()=="") {  

	              alert("验证码不能为空");
	              $("#rcode").focus(); 
	          }
	          else {  
	              a=a+1;   
	          } 
	          
	   //ajax判断       
	          if (a==1) {  
	        	  
	        		$.post(
	        				"/login/zc.php?action=zc",
	        				"user="+$("#ruser").val()+"&paw="+$("#rpaw").val()+"&code="+$("#rcode").val()+"&email="+$("#remail").val()+"&phone="+$("#rphone").val()+"&yzm="+$("#yzm").val(),
	        				function(date){
							if(date==1)
								{
								alert("恭喜您，注册成功！");
								window.location.href = '/index.php';
								}
							else
								{
									alert(date);
								}
	        				}
	        				);
	          }
	   });   
	  //结束ajsx判断   

</script>    
    
    
    
</body>
</html>
