<?php /* Smarty version Smarty-3.0.7, created on 2015-10-04 02:52:47
         compiled from "G:/wamp/www//sqs/templates\download.htm" */ ?>
<?php /*%%SmartyHeaderCode:2855610947f93e408-64217337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83557366cb3d966b59afd9212c2ef1fc47f40650' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\download.htm',
      1 => 1443863783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2855610947f93e408-64217337',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <!--con-->
        <div class="con-warp">
            <div class="con">
                <div>
                    <img src="../images/hand.png" /></div>
                <div>
                    <div class="float">
                        <div class="con-left01">
                            <div class="con-left-zx">
                                <img src="../images/knowledge-zv.png" />&nbsp 辅助栏目<span class="con-left-news">COLUMN</span></div>
                            <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
                        </div>
                        <div class="con-left02">
                            <div>
                            <a href="/sqs/hand/hand.php">
                                <div class="float con-left-lx hand1">
                                    手牵手资讯
                                </div>
                           </a>
                             <a href="/sqs/hand/hand-under3.php">
                                <div class="float con-left-lx hand2">
                                    义工风采
                                 </div>
                              </a>
                                <div class="clear">
                                </div>
                            </div>
                            <div>
                            <a href="/sqs/jz/jz.php">
                                <div class="float con-left-lx s3">
                                    捐助</div></a>
                                <div class="float con-left-lx hand4">
                                    团队合作</div>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float">
                        <div class="con-right">
                            <div class="con-right-wz">
                                您现在的位置：<a href="index.htm">首页</a> > <a href="about-us.htm">辅助栏目</a> > <a href="download.htm"><?php echo $_smarty_tpl->getVariable('name')->value['name'];?>
</a></div>
                            <div class="con-right-lz">
                              <?php echo $_smarty_tpl->getVariable('name')->value['name'];?>
</div>
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
                            <div class="dw-list dw-top">
                                <div class="float download-bb">
                                    <img src="../images/download.jpg" /><?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</div>
                                <div class="float">
                               <?php if ($_smarty_tpl->getVariable('log')->value==0){?>
                                    <a href="javascript:void(0);" class="xia"  onclick="javascript:(alert('登录后才可以下载哦！'))"><span class="download-span">点击下载</span></a>
                                 <?php }else{ ?>
                                 <a href="/sqs/chuli.php?url=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ziliao'];?>
"><span class="download-span">点击下载</span></a>
                                 <?php }?>   
                                    </div>
                                <div class="clear">
                                </div>
                            </div>
                            <?php endfor; endif; ?>
                            
                             <div class="fy">
                                <ul>
                               <?php echo $_smarty_tpl->getVariable('pager')->value;?>

                                </ul>
                                <div class="clear">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

</body>
</html>
