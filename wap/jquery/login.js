// JavaScript Document
function fleshVerify() {
    document.getElementById("validatecode").src += "?";
}
function fleshVerify2() {
    document.getElementById("validatecode2").src += "?";
}
function fleshVerify3() {
    document.getElementById("validatecode3").src += "?";
}
/*
$(function(){

	$("#form1").validate({
        rules: {
        },
        messages: {
        },
	    submitHandler:function(form){
            var sex='';
            if($("#sex1").attr("checked"))
            {
                sex="男";
            }
            else{
                sex="女";
            }
            $.ajax({
    	        type:"post",
                url :"SignUp.php",
		        data:{action:"online",ranking:$("#ranking").val(),username:$("#username").val(),phone:$("#phone").val(),email:$("#email").val(),cardnumber:$("#cardnumber").val(),address:$("#address").val(),code:$("#code").val(),qqnumber:$("#qqnumber").val(),money:$("#money").val(),banknumber:$("#banknumber").val(),bankaddress:$("#bankaddress").val(),sex:sex},
		        beforeSend :function(){
			       $("#tip_load").html("<img src='images/onLoad.gif' align='absmiddle' />&nbsp;正在为您提交...");
		        },
		        success: function(msg){
		        	if(msg=="1"){
		        		alert("提交成功");
			    	    window.location.href='Contact_Us.php';
				    }
		        	else if(msg=="2")
		        	{
		        		$("#errorInfo").attr("style","display:block");
					    $("#errorInfo").attr("style","color:red");
					    $("#errorInfo").text("提交失败");
		        	}else if(msg=="3")
		        	{
		        		$("#errorInfo").attr("style","display:block");
					    $("#errorInfo").attr("style","color:red");
					    $("#errorInfo").text("验证码错误");
		        	}
		        	else if(msg=="5")
		        	{
		        		$("#errorInfo").attr("style","display:block");
					    $("#errorInfo").attr("style","color:red");
					    $("#errorInfo").text("手机号格式错误");
		        	}
                    else if(msg=="6")
                    {
                        $("#errorInfo").attr("style","display:block");
                        $("#errorInfo").attr("style","color:red");
                        $("#errorInfo").text("邮箱错误");
                    }
		        	else{
					    
					    $("#errorInfo").attr("style","display:block");
					    $("#errorInfo").attr("style","color:red");
					    $("#errorInfo").text("联系管理员");
				    }
				    document.getElementById("validatecode").src += "?";
		        },
		        error: function(){
		            
				    $("#errorInfo").attr("style","display:block");
				    $("#errorInfo").attr("style","color:red");
			        $("#errorInfo").text("提交失败，请稍候再试！");
				    $("#tip_load").text("");
				    document.getElementById("validatecode").src += "?";
		        }
    	        
    	    })
    		
	    }
    })

});*/



/*
$(function(){
	//登录
    $("#loginBar").validate({
        rules: {
            uid: {required: true},
		    pwd: {required: true}
        },
        messages: {
            uid: {required: "*"},
		    pwd: {required: "*"}
        },
	    submitHandler:function(form){
	    	$.ajax({
    	        type:"post",
                url :"Login.php",
		        data:{action:"login",uid:$("#uid").val(),pwd:$("#pwd").val()},
		        beforeSend :function(){
			       $("#tip_load").html("<img src='images/onLoad.gif' align='absmiddle' />&nbsp;正在为您登录...");
		        },
		        success: function(msg){
		        	if(msg=="1"){
			    	    window.location.href='Member.php';
				    }else{
					    
					    $("#errorInfo").attr("style","display:block");
					    $("#errorInfo").attr("style","color:red");
					    $("#errorInfo").text("用户名或密码错误");
					    $("#tip_load").text("");
				    }
				   // document.getElementById("validatecode").src += "?";
		        },
		        error: function(){
		            
				    $("#errorInfo").attr("style","display:block");
				    $("#errorInfo").attr("style","color:red");
			        $("#errorInfo").text("登录失败，请稍候再试！");
				    $("#tip_load").text("");
				    //document.getElementById("validatecode").src += "?";
		        }
    	        
    	    })
    		
	    }
    }) 
    
    //注册
    $("#form2").validate({
    	rules: {
			uidd: {required: true},
			pwdd: {required:true},
			rpwd:{ required:true},
			phone: {required: true}
		},
		messages:{
			    uidd: {required: "*"},
			    pwdd: {required: "*"},
			    rpwd: {required:"*"},
			    phone: {required: "*"}
		},
	    submitHandler:function(form){
	    	$.ajax({
    	        type:"post",
                url :"Register.php",
		        data:{action:"reg",uidd:$("#uidd").val(),pwdd:$("#pwdd").val(),rpwd:$("#rpwd").val(),truename:$("#truename").val(),sex:$("#sex").val(),city:$("#city").val(),code:$("#code").val(),address:$("#address").val(),tele:$("#tele").val(),fax:$("#fax").val(),phone:$("#phone").val(),email:$("#email").val(),contents:$("contents").val()},
		        beforeSend :function(){
			       $("#tip_load").html("<img src='images/onLoad.gif' align='absmiddle' />&nbsp;正在为您提交...");
		        },
		        success: function(msg){
		        	//alert("s"+msg+"s");
		        	if(msg=="1"){
		        		alert("申请成功");
			    	    window.location.href='Member.php';
		        	}
				    else if(msg=="10"){
					    
					    $("#errorInfo2").attr("style","display:block");
					    $("#errorInfo2").attr("style","color:red");
					    $("#errorInfo2").text("重复密码出错");
					    $("#tip_load").text("");
				    }
				    else if(msg=="11"){
					    
					    $("#errorInfo2").attr("style","display:block");
					    $("#errorInfo2").attr("style","color:red");
					    $("#errorInfo2").text("手机号码出错");
					    $("#tip_load").text("");
				    }else if(msg=="12"){
					    
					    $("#errorInfo2").attr("style","display:block");
					    $("#errorInfo2").attr("style","color:red");
					    $("#errorInfo2").text("邮箱错误");
					    $("#tip_load").text("");
				    }
				    
				    else if(msg=="4"){
					    
					    $("#errorInfo2").attr("style","display:block");
					    $("#errorInfo2").attr("style","color:red");
					    $("#errorInfo2").text("账号已存在");
					    $("#tip_load").text("");
				    }
				    else if(msg=="20"){
					    
					    $("#errorInfo2").attr("style","display:block");
					    $("#errorInfo2").attr("style","color:red");
					    $("#errorInfo2").text("注册失败,请联系管理员");
					    $("#tip_load").text("");
				    }
				    else{
					    $("#errorInfo2").attr("style","display:block");
					    $("#errorInfo2").attr("style","color:red");
					    $("#errorInfo2").text("未知错误，请联系管理员");
					    $("#tip_load").text("");
				    }
				    document.getElementById("validatecode").src += "?";
		        },
		        error: function(){
		            
				    $("#errorInfo2").attr("style","display:block");
				    $("#errorInfo2").attr("style","color:red");
			        $("#errorInfo2").text("注册失败，请稍候再试！");
				    $("#tip_load").text("");
				    document.getElementById("validatecode").src += "?";
		        }
    	        
    	    })
    		
	    }
    })
    
    
    
     $("#form22").validate({
    	rules: {
			pwdd: {required:true},
			phone: {required: true}
		},
		messages:{
			    pwdd: {required: "*"},
			    phone: {required: "*"}
		},
	    submitHandler:function(form){
	    	$.ajax({
    	        type:"post",
                url :"Member.php",
		        data:{action:"edit",pwdd:$("#pwdd").val(),rpwd:$("#rpwd").val(),truename:$("#truename").val(),city:$("#city").val(),code:$("#code").val(),address:$("#dizhi").val(),tele:$("#tele").val(),fax:$("#fax").val(),phone:$("#phone").val(),email:$("#email").val(),contents:$("#contents").val(),company:$("#company").val()},
		        beforeSend :function(){
			       $("#tip_load").html("<img src='images/onLoad.gif' align='absmiddle' />&nbsp;正在为您提交...");
		        },
		        success: function(msg){
		        	//alert("s"+msg+"s");
		        	if(msg=="1"){
		        		alert("修改成功");
			    	    window.location.href='Member.php';
		        	}
				    else if(msg=="10"){
					    
					    $("#errorInfo22").attr("style","display:block");
					    $("#errorInfo22").attr("style","color:red");
					    $("#errorInfo22").text("重复密码出错");
					    $("#tip_load").text("");
				    }
				    else if(msg=="11"){
					    
					    $("#errorInfo22").attr("style","display:block");
					    $("#errorInfo22").attr("style","color:red");
					    $("#errorInfo22").text("手机号码出错");
					    $("#tip_load").text("");
				    }else if(msg=="12"){
					    
					    $("#errorInfo22").attr("style","display:block");
					    $("#errorInfo22").attr("style","color:red");
					    $("#errorInfo22").text("邮箱错误");
					    $("#tip_load").text("");
				    }
				    else if(msg=="20"){
					    
					    $("#errorInfo22").attr("style","display:block");
					    $("#errorInfo22").attr("style","color:red");
					    $("#errorInfo22").text("修改失败,请联系管理员");
					    $("#tip_load").text("");
				    } else if(msg=="90"){
					    
					    $("#errorInfo22").attr("style","display:block");
					    $("#errorInfo22").attr("style","color:red");
					    $("#errorInfo22").text("密码修改失败,请联系管理员");
					    $("#tip_load").text("");
				    }
				    else{
					    $("#errorInfo22").attr("style","display:block");
					    $("#errorInfo22").attr("style","color:red");
					    $("#errorInfo22").text("未知错误，请联系管理员");
					    $("#tip_load").text("");
				    }
				    document.getElementById("validatecode").src += "?";
		        },
		        error: function(){
		            
				    $("#errorInfo22").attr("style","display:block");
				    $("#errorInfo22").attr("style","color:red");
			        $("#errorInfo22").text("失败，请稍候再试！");
				    $("#tip_load").text("");
				    document.getElementById("validatecode").src += "?";
		        }
    	        
    	    })
    		
	    }
    })
    
    
    
 
    
    
    
    
});   */