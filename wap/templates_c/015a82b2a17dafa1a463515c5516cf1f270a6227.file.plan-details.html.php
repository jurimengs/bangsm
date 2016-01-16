<?php /* Smarty version Smarty-3.0.7, created on 2016-01-07 01:19:01
         compiled from "E:/wamp/www//yanqi/templates\plan-details.html" */ ?>
<?php /*%%SmartyHeaderCode:16894568dbd05acb324-56498998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '015a82b2a17dafa1a463515c5516cf1f270a6227' => 
    array (
      0 => 'E:/wamp/www//yanqi/templates\\plan-details.html',
      1 => 1452129541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16894568dbd05acb324-56498998',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>resolve-del</title>
    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</head>
<body>
<div class="product-del-two">
    <!---------------------------------------------------------------top---------------------------------------------------->
    <?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <!---------------------------------------------------------------name---------------------------------------------------->
    <div class="pro-name-warp">
        <div class="pro-name group">
            <div class="name">
               <?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>

            </div>
            <!--<div><button>返回</button></div>-->
        </div>
    </div>
    <!--------------------------------------------------------------详情--------------------------------------------------->
    <div class="news group">
        <div class="news-left">
            <div>
                提供成熟的系统化产品和应用方案。EnkitekTM通过融合安防技术和IT信息技术为客户提供差异化的价值，至今我们已经积累了银行、商业、大型国企、公共事业等众多成功案例。岩齐团队主要由工程师组成，我们深刻明白奉献和共享的价值，我们欢迎每一个想发挥适合自己特长的伙伴。
            </div>
            <div class="news-banner"><img src="../images/news-del.jpg"/></div>
            <div class=" group">
                <div class="news-bottom">
                    <div class="news-next">
                        <div>上一个方案：终端互联方案</div>
                        <div>下一个方案：视屏识别方案</div>
                    </div>

                    <button>返回</button>
                </div>
            </div>


        </div>
        <?php $_template = new Smarty_Internal_Template('public/right.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        </div>
    </div>
</div>
<!---------------------------------------------------------------footer---------------------------------------------------->
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>