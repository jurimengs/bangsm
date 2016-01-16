<?php /* Smarty version Smarty-3.0.7, created on 2016-01-10 10:35:04
         compiled from "F:/wamp/www//bangsm/templates\course-details.html" */ ?>
<?php /*%%SmartyHeaderCode:4068569233d814b275-02223178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15ad5716010b410b94d4ffd85726dc7aae1b59cf' => 
    array (
      0 => 'F:/wamp/www//bangsm/templates\\course-details.html',
      1 => 1452422103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4068569233d814b275-02223178',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'F:\wamp\www\bangsm\smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="target-densitydpi=device-dpi, width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
 | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/example.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.slides.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="jquery/Validform_Datatype.js"></script>
    <script type="text/javascript" src="jquery/Validform_v5.3.2_min.js"></script>
</head>
<body>
<header>
    <section class="sw">
        <div class="log"></div>
        <a class="search"></a>
    </section>
    
    <section class="search-box">
        <div class="search-box-input"> <input type="text" value="请输入关键字" onfocus="if(value=='请输入关键字'){value=''}" onblur="if(value==''|| value==' '){ value='请输入关键字'}">
        </div>
    </section>
    
</header>
<section class="studydetails-title">
    <p><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
</p>

    <p class="date">
        <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('xiangqing')->value['time'],"%Y/%m/%d");?>

    </p>
</section>
<article class="study-content">
    <section>
        <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

    </section>
    <section class="form form1">
        <h3>在线预约</h3>
        <form method="post" action="yuyueform.php?action=duan" class="yuyueform">
        <ul>
            <li>
                <span class="title">姓名</span>
                <input type="text" name="username">
            </li>
            <li>
                <span class="title">联系电话</span>
                <input type="text" name="phone">
            </li>
            <li>
                <span class="title">Email</span>
                <input type="text" name="email">
            </li>
            <li>
                <span class="title">职务</span>
                <input type="text" name="post">
            </li>
            <li>
                <span class="title">单位名称</span>
                <input type="text" name="unit">
            </li>
            <li>
                <span class="title">其他说明</span>
                <textarea class="info" name="other">

                </textarea>
            </li>

            <li>
                <section class="submit2">
                <button type="submit" class="submit">提交</button>
                </section>
            </li>
        </ul>
        </form>
    </section>
</article>

<script>
    /*
     $(function(){
     $(".submit").click(function(){

     $.ajax({
     cache: true,
     type: "POST",
     url:ajaxCallUrl,
     data:$('#yourformid').serialize(),// 你的formid
     async: false,
     error: function(request) {
     alert("Connection error");
     },
     success: function(data) {
     $("#commonLayout_appcreshi").parent().html(data);
     }
     });
     });
     });
     */

    $(function(){
        var demo = $(".yuyueform").Validform({
            btnSubmit: ".submit",
            btnReset: ".btn_reset",
            tiptype: 3,
            label: ".label",
            showAllError: false,
            ajaxPost: true,
            callback: function(data) {
                if (data.status == "1") {
                    alert(data.info);
                    window.location.href = '?';
                }
                else{
                    alert(data.info);
                    // $(".clas"+data.status).focus();
                }
            },
            tiptype:function(msg,o,cssctl){
            }
        });
    });

</script>

</body>
</html>