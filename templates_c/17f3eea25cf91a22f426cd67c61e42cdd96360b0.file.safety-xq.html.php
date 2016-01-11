<?php /* Smarty version Smarty-3.0.7, created on 2015-10-28 11:40:20
         compiled from "G:/wamp/www//jl/templates\safety-xq.html" */ ?>
<?php /*%%SmartyHeaderCode:136545630b424355de1-49375193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17f3eea25cf91a22f426cd67c61e42cdd96360b0' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\safety-xq.html',
      1 => 1446032419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136545630b424355de1-49375193',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'G:\wamp\www\jl\smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html>
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
    <img src="../images/safety/safety1.png">
</div>
<div class="cmain">
 <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <div class="cmain_rightarea">
        <div class="cmain_1">
            <div class="new_change">
                <div class="newlist_t">
                    <?php $_template = new Smarty_Internal_Template('public/home.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                    <div class="safety_bk">
                        
                <div class="t_q">
                    <div class="safety_content">
                        <div class="safety_contentchange">
                            <div class="safety_left">
                                <img src="../images/safety/safetyxq.png">
                                <h4><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
<span>&nbsp;/<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('xiangqing')->value['time'],"%Y-%m-%d");?>
</span></h4>

                                <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

                            </div>
                            
                        </div>
                        <div class="safety_right">
                            <h4 style="text-align: left; margin-left: 16px;">相关管理</h4>
                            
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('reght')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                            
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['first']=='true'){?>
                            <img src="../<?php echo $_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" style="width:179px; higeht:104px;">
                            <h4><a href="/jl/safety/safety-xq.php?whatid=<?php echo $_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo mb_substr($_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'],0,10,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'])>10){?>...<?php }?></a></h4>
                            <p><?php echo mb_substr(strip_tags($_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents']),0,60,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents'])>100){?>...<?php }?></p>
                            <ul>
                            <?php }else{ ?>
                            
                                <li><a href="/jl/safety/safety-xq.php?whatid=<?php echo $_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo mb_substr($_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'],0,10,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('reght')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'])>10){?>...<?php }?></a></li>
                            
                            <?php }?>
                            
                           <?php endfor; endif; ?>
                           </ul>
                        </div>
                    </div>
                    <ul class="ulback">
                        <li style="border-bottom:  1px solid #e5e5e5;">上一篇：<?php echo $_smarty_tpl->getVariable('xiangqingshang')->value;?>
<span class="news_xqback" onclick="javascript:(location.href='javascript:history.back(-1);')"></span>
                        </li>
                        <li> 下一篇：<?php echo $_smarty_tpl->getVariable('xiangqingxia')->value;?>
</li>
                    </ul>
                      </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>