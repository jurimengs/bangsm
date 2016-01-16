<?php
require_once '../configs/db.inc.php';
require_once '../configs/smarty.inc.php';

if(@$_GET['action']=='getpassword'){
	$email = @$_POST['email'];
	$result=$db->query("SELECT * FROM cn_admin WHERE email='".$email."'");
	$admin=$db->fetch($result);
	if(!$admin){
		echo("<font color=red>你输入的email不存在.</font>");
	}
    else
    {
		$password = mt_rand();
		
		$result = $db->query("SELECT * FROM cn_mail WHERE id=1");
		$mailInfo = $db->fetch($result);
		
		
		$email=$_POST['email'];
		require("../includes/PHPMailer/class.phpmailer.php");
 
		$mail = new PHPMailer();
		$mail->IsSMTP();                 // 启用SMTP
		$mail->Host = "".$mailInfo['mail_smtp']."";           //SMTP服务器
		$mail->SMTPAuth = true;                  //开启SMTP认证
		$mail->Username = "".$mailInfo['mail_user']."";            // SMTP用户名
		$mail->Password = "".$mailInfo['mail_password']."";                // SMTP密码
		$mail->Port = "".$mailInfo['mail_port']."";
		$mail->From = "".$mailInfo['mail_user']."";            //发件人地址
		$mail->FromName = '网站系统管理员';              //发件人
		$mail->AddAddress($email); //添加收件人
		$mail->IsHTML(true);                 // 是否HTML格式邮件
		$mail->CharSet = "utf-8";
		$mail->Encoding = "base64"; 
		$mail->Subject = "网站系统找回密码";          //邮件主题
		$mail->Body    = "<p><b>网站系统找回密码</b></p>";        //邮件内容
		$mail->Body   .= "<p>用户名: ".$admin['user_id']."</p>";
		$mail->Body   .= "<p>密码: ".$password."</p>";
		$mail->Body	  .= "<p>http://".$_SERVER ['HTTP_HOST']."</p>";
		$mail->Body	  .= "<p>联系：<br />";
		$mail->Body	  .= "QQ：297101589</p>";
		$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //邮件正文不支持HTML的备用显示
		 
		if(!$mail->Send())
		{
		echo("<font color=red>邮件发送失败.</font><br />");
		echo "Mailer Error: " . $mail->ErrorInfo;
		exit;
		}else{
		 	$db->query("UPDATE cn_admin SET password='".md5($password)."' WHERE email='".$email."'");
			echo("<font color=green>用户名和新密码已发送到你的邮箱</font>");
		}
	}
}
$smarty->display('sysadmin/get_password.html');
?>