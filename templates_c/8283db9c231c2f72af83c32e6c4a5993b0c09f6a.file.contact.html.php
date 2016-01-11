<?php /* Smarty version Smarty-3.0.7, created on 2015-10-27 07:49:59
         compiled from "G:/wamp/www//jl/templates\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:31499562f2ca730ce39-12172597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8283db9c231c2f72af83c32e6c4a5993b0c09f6a' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\contact.html',
      1 => 1445932194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31499562f2ca730ce39-12172597',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
       <title><?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</head>
<body>
<?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!--mainnav-->
<div class="cbanner">
    <img src="../images/contact/contact.png">
</div>
<div class="cmain">

    <div class="cmain_leftarea">
        <h2><span>联系我们</span></h2>
        <ul>
            <li class="cmain_leftarea_icon"><span></span><a href="javascript:void(0)">联系方式</a></li>
            <li><span></span><a href="javascript:void(0)">投诉建议</a></li>
            <li><span></span><a href="javascript:void(0)">招聘信息</a></li>

        </ul>

    </div>
    <div class="cmain_rightarea">
        <div class="cmain_1">
            <div class="cmain_rightarea_title">
                <h3><span></span>联系方式</h3>
                <div class="cmain_rightarea_title_word">您的位置：首页 > 联系我们 > 联系方式</div>
            </div>
            <div class="contact_fs">
                <div class="contact_fs_left">
                    <h2>上海嘉定区国有资产经营（集团）有限公司</h2>
                    <div class="contact_fs_leftp">
                        <img src="../images/contact/tu.png">
                        <div class="t">
                        <p >上海市虹口区中山北一路1230号</p>
                        <p>   200335</p>
                        <p>  021-56484855</p>
                        </div>
                    </div>
                </div>
                <div class="contact_fs_img">
                    地图

                </div>
            </div>
        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>