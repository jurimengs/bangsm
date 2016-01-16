<?php /* Smarty version Smarty-3.0.7, created on 2016-01-10 07:07:43
         compiled from "F:/wamp/www/bangsm/templates\news-list.html" */ ?>
<?php /*%%SmartyHeaderCode:221695692033f776a34-84309784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '509434f974998923744bd64d07977e6174fb01aa' => 
    array (
      0 => 'F:/wamp/www/bangsm/templates\\news-list.html',
      1 => 1452357198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221695692033f776a34-84309784',
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
    <title><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?><?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->tpl_vars['v']->value['id']){?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php }?><?php }} ?> | <?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/example.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.slides.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    
    <style type="text/css">
        .more_loader_spinner{width:20px; height:20px; margin:10px auto; background: url(loader.gif) no-repeat;}
    </style>
    
</head>
<body>
<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('tid')->value;?>
" id="tid">
<input type="hidden" value="1" id="page">
<header>
    <section class="sw">
        <div class="log1"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?><?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->tpl_vars['v']->value['id']){?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php }?><?php }} ?></div>
    </section>
</header>
<article class="list">
  <ul id="more">
      <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
?>
      <li >
         <div > <a href="News-Details.php?id=<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['l']->value['title'];?>
</h3></a></div>
          <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['l']->value['time'],"%Y/%m/%d");?>
</p>
      </li>
      <?php }} ?>

   <li class="more" page="">
      <h4>点击加载更多</h4>
    </li>
  </ul>
</article>

<script type="text/javascript">
    $(function() {
        var page=1;                     //当前页数
       $(".more").click(function(){
            var tid=$("#tid").val();  //当前分类
            $.ajax({
                type: "post",//采用post 参数
                url: "date.php", //请求的php 函数
                data: {tid:tid,table:'news',pagesize:6,page:page}, //传递的参数
                dataType: 'json', //返回值以json格式返回
                success: function(data) { //回调函数，在这里将data里面的数据追加到页面就可以了
                    //$("#more").append(data);
                    var li ="";
                    if(data!=1){
                    $.each(data.list,function(name,value) {
                        li+="<li >" +
                        "<div ><a href='News-Details.php?id="
                        +value['id']+"'>" +
                        "<h3>"+value['title']+"</h3></a>" +
                        "<p>"+value['date']+"</p>" +
                        "</li>";
                        //alert(value["date"]);
                    });
                    $(".more").before(li);  //在《加载更多》这个标签前面追加内容
                    $(".more_loader_spinner").removeClass();   //移除动画
                        page++;   //当前页数增加
                    }else{
                        alert("已加载全部");
                        $(".more_loader_spinner").removeClass();   //移除动画
                    }

                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {//出错
                    alert("数据异常,请检查是否json格式");
                    $(".more_loader_spinner").removeClass();   //移除动画
                },
                beforeSend:function(){//加载中
                    $(".more").before("<div class='more_loader_spinner'></div>"); //加载动画
                }
            });
        });
    });
</script>

</body>
</html>