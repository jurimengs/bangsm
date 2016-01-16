<?php /* Smarty version Smarty-3.0.7, created on 2016-01-13 10:14:06
         compiled from "/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/form.html" */ ?>
<?php /*%%SmartyHeaderCode:7400452085695b2eebefed0-16911250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbcfac969fcffb846525336f9f6985eac63f9263' => 
    array (
      0 => '/var/www/virtual/bangmaisiw/home/wwwroot/wap/templates/form.html',
      1 => 1452651241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7400452085695b2eebefed0-16911250',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<section class="form">
    <h3>在线预约</h3>
    <form method="post" action="yuyueform.php?action=quan" class="yuyueform">
        <ul>
            <li>
                <span class="title">项目主题</span>
                <input type="text" name="title">
            </li>
            <li>
                <span class="title">项目日期</span>
                <input type="date" name="date">
            </li>
            <li>
                <span class="title">项目人数</span>
                <input type="text" name="num">
            </li>
            <li>
                <span class="title">您的姓名</span>
                <input type="text" name="username">
            </li>
            <li>
                <span class="title">联系方式</span>
                <input type="text" name="phone">
            </li>
            <li>
                <span class="title t">以前参加过的类似项目主题</span>
                <section class="change">
                    <input type="radio" class="shi" name="yiqian" value="1">是<input type="radio" value="2" name="yiqian" class="fou">否
                </section>
            </li>
            <li>
                <span class="title">单位名称</span>
                <input type="text" name="unit">
            </li>
            <li>
                <p class="customer">客户需求描述</p>
                <textarea name="demand"></textarea>
            </li>
            <li>
                <p class="customer">主要问题和目标</p>
                <textarea name="fq"></textarea>
            </li>
            <li>
                <p class="customer">期望项目效果</p>
                <textarea name="expect"></textarea>
            </li>
            <li>
                <p class="customer">其他说明</p>
                <textarea name="other"></textarea>
            </li>
            <li>
                <button type="submit" class="submit">提交</button>
            </li>
        </ul>
    </form>
</section>

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

