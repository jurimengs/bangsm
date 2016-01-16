<?php /* Smarty version Smarty-3.0.7, created on 2016-01-07 13:33:05
         compiled from "F:/wamp/www//yanqi/templates\plan-details.html" */ ?>
<?php /*%%SmartyHeaderCode:22090568e691187d6a5-21076550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154858ffbed1e19aa41222fb60fc3dd02aed06c8' => 
    array (
      0 => 'F:/wamp/www//yanqi/templates\\plan-details.html',
      1 => 1452173585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22090568e691187d6a5-21076550',
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
            <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

            <div class=" group">
                <div class="news-bottom">
                    <div class="news-next">
                        <div>上一个方案：<?php echo $_smarty_tpl->getVariable('xiangqingshang')->value;?>
</div>
                        <div>下一个方案：<?php echo $_smarty_tpl->getVariable('xiangqingxia')->value;?>
</div>
                    </div>

                    <button onclick="self.location=document.referrer;">>返回</button>
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