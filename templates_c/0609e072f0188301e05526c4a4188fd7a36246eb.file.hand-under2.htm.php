<?php /* Smarty version Smarty-3.0.7, created on 2015-10-03 04:20:27
         compiled from "G:/wamp/www//sqs/templates\hand-under2.htm" */ ?>
<?php /*%%SmartyHeaderCode:9171560f578b6d69e4-23412597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0609e072f0188301e05526c4a4188fd7a36246eb' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\hand-under2.htm',
      1 => 1443845577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9171560f578b6d69e4-23412597',
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
                    <img src="../images/hand2-1.jpg" /></div>
                <div>
                    <div class="float">
                        <div class="con-left01">
                            <div class="con-left-zx">
                                <img src="../images/knowledge-zv.png" />&nbsp 手牵手资讯<span class="con-left-news">NEWS</span></div>
                            <div class="con-left-mt">
                                <a href="hand.php">消息公告</a></div>
                            <div class="con-left-lz">
                                <a href="/sqs/hand/hand-under1.php">服务展示</a>
                            </div>
                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('left_zx')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <div <?php if ($_smarty_tpl->getVariable('id')->value==$_smarty_tpl->getVariable('left_zx')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>class="con-left-menu"<?php }else{ ?>class="con-left-menu2"<?php }?>>
                                <img src="../images/sanjiao.png" /><a href="hand-under2.php?whatid=<?php echo $_smarty_tpl->getVariable('left_zx')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('left_zx')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</a>
                            </div>
                   			<?php endfor; endif; ?>
                            <div class="con-left-mt"><a href="/sqs/hand/hand-under3.php">义工风采</a></div>
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
                                    捐助
                                </div>
                             </a>   
                             <a href="javascript:void(0)"> 
                                <div class="float con-left-lx hand4">
                                    团队展示
                                 </div>
                              </a>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="float">
                        <div class="con-right">
                            <div class="hand-n2-wz">
                                您现在的位置：<a href="../index.php">首页</a> > <a href="hand.php">手牵手资讯</a> > <a href="hand-under1.php">服务展示</a>&nbsp;>&nbsp;<?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
</div>
                            <div class="con-right-lz">
                                <?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
</div>
                            <div class="hand-n2-top">
                                <div>
                                    <img src="../images/hand2-2.jpg" /></div>
                                <div>
                                    
                                    
                                    <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

                                </div>
                                <ul class="yt">
                                
                                    <li class="one">
                                    </li>
                                    
                                    <li class="two">
                                    </li>
                                    
                                    <li class="three">
                                    </li>
                                    
                                    <li class="four">
                                    </li>
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
