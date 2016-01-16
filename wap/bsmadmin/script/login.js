// JavaScript Document
function fleshVerify() {
    document.getElementById("validatecode").src += "?";
}
$(function(){
    $("#form1").validate({
        rules: {
            txtUserid: {required: true},
		    txtPassword: {required: true},
		    txtCode: {required:true}
        },
        messages: {
            txtUserid: {required: "*"},
		    txtPassword: {required: "*"},
		    txtCode: {required:"*"}
        },
	    submitHandler:function(form){
    		
    	    $.ajax({
    	        type:"post",
                url :"login.php",
		        data:{action:"login",txtUserid:$("#txtUserid").val(),txtPassword:$("#txtPassword").val(),txtCode:$("#txtCode").val()},
		        beforeSend :function(){
			        $("#btnSubmit").attr("style","display:none");
			        $("#tip_load").html("<img src='images/onLoad.gif' align='absmiddle' />&nbsp;正在为您登录...");
		        },
		        success: function(msg){
				    if(msg=="1"){
			    	    window.location.href='main.php';
				    }else if(msg=="2"){
				        $("#btnSubmit").attr("style","display:block");
					    $("#errorInfo").attr("style","display:block");
					    $("#errorInfo").text("账号被禁用");
					    $("#tip_load").text("");
				    }else if(msg=="3"){
				        $("#btnSubmit").attr("style","display:block");
					    $("#errorInfo").attr("style","display:block");
					    $("#errorInfo").text("验证码输入不正确");
					    $("#tip_load").text("");
				    }else{
					    $("#btnSubmit").attr("style","display:block");
					    $("#errorInfo").attr("style","display:block");
					    $("#errorInfo").text("用户名或密码错误");
					    $("#tip_load").text("");
				    }
				    document.getElementById("validatecode").src += "?";
		        },
		        error: function(){
		            $("#btnSubmit").attr("style","display:block");
				    $("#errorInfo").attr("style","display:block");
			        $("#errorInfo").text("登录失败，请稍候再试！");
				    $("#tip_load").text("");
				    document.getElementById("validatecode").src += "?";
		        }
    	        
    	    })
    		
	    }
    })   
});