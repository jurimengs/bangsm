<?php /* Smarty version Smarty-3.0.7, created on 2015-10-29 02:01:23
         compiled from "G:/wamp/www//jl/templates\safety.html" */ ?>
<?php /*%%SmartyHeaderCode:284856317df308b517-84174743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8f1a4ed407c86d47c1f0424e69cda4c8e5cc89b' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\safety.html',
      1 => 1446084079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284856317df308b517-84174743',
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
                        <div class="safety_bktop">
                            <div class="safetopchange">
                            
                                <div class="safetopchange1">
                                    <img src="../images/safety/safety2.png">

                                    <div class="bktop_word">
                                        <h2>消防管理<span>2015/09/08</span></h2>

                                        <p>
                                            1、每周检查项目：检查各处消防栓、消防水管；检查各类手提灭火器；检查防火门、安全出口指示灯、安全通道照明是否完好1。</p>

                                        <p>
                                            2、每月检查项目：消防加压水泵、正压送风、排烟风机试启动一次；各类信号指示灯是否正常；各类水压压力表是否正常；消防水泵泵体是否漏水、生锈；检查消防电源是否正常，能否及时切换。</p>

                                        <p><a href="javascript:void(0)">更多>></a></p>
                                    </div>
                                </div>
                                <div class="safetopchange2">
                                    <img src="../images/safety/safety2.png">
                                    <div class="bktop_word">
                                        <h2>消防管理333<span>2015/09/08</span></h2>

                                        <p>
                                            1、每周检查项目：检查各处消防栓、消防水管；检查各类手提灭火器；检查防火门、安全出口指示灯、安全通道照明是否完好2。</p>

                                        <p>
                                            2、每月检查项目：消防加压水泵、正压送风、排烟风机试启动一次；各类信号指示灯是否正常；各类水压压力表是否正常；消防水泵泵体是否漏水、生锈；检查消防电源是否正常，能否及时切换。</p>

                                        <p><a href="javascript:void(0)">更多>></a></p>
                                    </div>
                                </div>
                                <div class="safetopchange3">
                                    <img src="../images/safety/safety2.png">

                                    <div class="bktop_word">
                                        <h2>消防管理322<span>2015/09/08</span></h2>

                                        <p>
                                            1、每周检查项目：检查各处消防栓、消防水管；检查各类手提灭火器；检查防火门、安全出口指示灯、安全通道照明是否完好。3</p>

                                        <p>
                                            2、每月检查项目：消防加压水泵、正压送风、排烟风机试启动一次；各类信号指示灯是否正常；各类水压压力表是否正常；消防水泵泵体是否漏水、生锈；检查消防电源是否正常，能否及时切换。</p>

                                        <p><a href="javascript:void(0)">更多>></a></p>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <ul class="safety_bktop_index">
                                <li class="tchang"></li>
                                <li></li>
                                <li></li>
                                
                            </ul>
                        </div>
                        <div class="safety_bkbottom">
                            <p>
                            <?php echo $_smarty_tpl->getVariable('pager')->value;?>

	                            
                            </p>

                            <div class="bkbottomul_change">
                                <ul class="bkbottomul">
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('list')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                    <li>
                                    <a href="/jl/safety/safety-xq.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
                                    <img src="../images/safety/date.png">
                                        <?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>

                                       </a> 
                                    </li>
                                 <?php endfor; endif; ?>   
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