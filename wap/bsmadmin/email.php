<?php
require_once 'inc.php';

$action = empty($_GET["action"])?'':$_GET["action"];
if($action == "edit"){
		$mail_smtp = $_POST['mail_smtp'];
		$mail_port = $_POST['mail_port'];
		$mail_user = $_POST['mail_user'];
		$mail_password = $_POST['mail_password'];
		$isbool = $db->query("UPDATE cn_mail SET mail_smtp='$mail_smtp',mail_port='$mail_port',mail_user='$mail_user',mail_password='$mail_password' WHERE id=1");
		if($isbool!==false){
			success_msg('修改成功','?');
		}else{
			error_msg('修改失败','back');
		}
}
if($action == 'testTo'){
		
		$mail_smtp = $_GET['mail_smtp'];
		$mail_port = $_GET['mail_port'];
		$mail_user = $_GET['mail_user'];
		$mail_password = $_GET['mail_password'];
		$toEmail = $_GET['toEmail'];
		
		
		require("../includes/PHPMailer/class.phpmailer.php");
 
		$mail = new PHPMailer();
		$mail->IsSMTP();                 // 启用SMTP
		$mail->Host = "".$mail_smtp."";           //SMTP服务器
		$mail->SMTPAuth = true;                  //开启SMTP认证
		$mail->Username = "".$mail_user."";            // SMTP用户名
		$mail->Password = "".$mail_password."";                // SMTP密码
		$mail->Port = "".$mail_port."";
		$mail->From = "".$mail_user."";            //发件人地址
		$mail->FromName = '网站系统管理员';              //发件人
		$mail->AddAddress($toEmail); //添加收件人
		$mail->IsHTML(true);                 // 是否HTML格式邮件
		$mail->CharSet = "utf-8";
		$mail->Encoding = "base64"; 
		$mail->Subject = "网站系统邮件测试";          //邮件主题
		$mail->Body    = "<p>当您收到这封邮件时，说明邮件配置已经正确。</p>";        //邮件内容
		$mail->Body	  .= "<p>http://".$_SERVER ['HTTP_HOST']."</p>";
		$mail->Body	  .= "<p>联系：<br />";
		$mail->Body	  .= "QQ：297101589</p>";
		$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //邮件正文不支持HTML的备用显示
		 
		if(!$mail->Send())
		{
			die('0');
		}else{
			die('1');
		}
		
}
if($action == ''){
	$result=$db->query_by_id('cn_mail', 1);
	$mailInfo = $db->fetch($result);
	$smarty->assign('mailInfo',$mailInfo);
}

$smarty->assign("action",$action);
$smarty->display('sysadmin/email.html');
require_once 'footer.php';
?>