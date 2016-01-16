<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 2016/1/10
 * Time: 16:13
 */
require_once 'inc.php';
$action=empty($_GET["action"])?'':$_GET["action"];


if($action=="quan"){

    @$title=$_POST['title'];          //项目主题
    @$date=$_POST['date'];            //项目日期
    @$num=$_POST['num'];              //项目人数
    @$username=$_POST['username'];    //姓名
    @$phone=$_POST['phone'];          //联系方式
    @$yiqian=$_POST['yiqian'];        //以前参加过的类似项目主题
    @$unit=$_POST['unit'];            //单位名称
    @$demand=$_POST['demand'];        //客户需求描述
    @$fq=$_POST['fq'];                //主要问题和目标
    @$expect=$_POST['expect'];        //期望项目效果
    @$other=$_POST['other'];          //其他说明
    $time=time();
    if(empty($title)){
        die(json_encode(array('status'=>7,'info'=>'项目主题不能为空')));
    }

    if(empty($username)){
        die(json_encode(array('status'=>7,'info'=>'请填写您的姓名')));
    }
    if(!preg_match('/^1[3,5,8]{1}[0-9]{1}[0-9]{8}$/',$phone)){
        die(json_encode(array('status'=>2,'info'=>'请输入正确手机格式号码')));
    }


    $mod_content="title,date,num,username,phone,yiqian,unit,demand,fq,expect,other,time";
    $value="'$title','$date','$num','$username',$phone,'$yiqian','$unit','$demand','$fq','$expect','$other',$time";
    $isbool=$db->insert("cn_about",$mod_content,$value);
    if($isbool!==false){
        die(json_encode(array('status'=>1,'info'=>'预约成功')));
    }else{
        die(json_encode(array('status'=>2,'info'=>'预约失败')));
    }
}
else{
    $username=$_POST['username'];    //姓名
    $phone=$_POST['phone'];          //联系方式
    $email=$_POST['email'];          //Email
    $post=$_POST['post'];            //职务
    $unit=$_POST['unit'];            //单位名称
    $other=$_POST['other'];          //其他说明
    $time=time();
    if(empty($username)){
        die(json_encode(array('status'=>7,'info'=>'请填写您的姓名')));
    }
    if(!preg_match('/^1[3,5,8]{1}[0-9]{1}[0-9]{8}$/',$phone)){
        die(json_encode(array('status'=>2,'info'=>'请输入正确手机格式号码')));
    }
    if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/',$email)){
        die(json_encode(array('status'=>5,'info'=>'邮箱格式错误')));
    }
    $mod_content="username,phone,email,post,unit,other,time";
    $value="'$username',$phone,'$email','$post','$unit','$other',$time";
    $isbool=$db->insert("cn_course_about",$mod_content,$value);
    if($isbool!==false){
        die(json_encode(array('status'=>1,'info'=>'预约成功')));
    }else{
        die(json_encode(array('status'=>2,'info'=>"预约失败")));
    }
}

?>