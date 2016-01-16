<?php /* Smarty version Smarty-3.0.7, created on 2016-01-10 12:35:41
         compiled from "F:/wamp/www//bangsm/templates\form.html" */ ?>
<?php /*%%SmartyHeaderCode:32455692501d54a310-88698267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29c83fd1cb8b613a678d8360ba07b994ae7d5641' => 
    array (
      0 => 'F:/wamp/www//bangsm/templates\\form.html',
      1 => 1452429340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32455692501d54a310-88698267',
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
                <input type="text" name="date">
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

