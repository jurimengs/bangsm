<?php /* Smarty version Smarty-3.0.7, created on 2015-10-08 01:47:02
         compiled from "G:/wamp/www//sqs/templates\jz.htm" */ ?>
<?php /*%%SmartyHeaderCode:98275615cb1649f318-57526572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '351f2e5e447bfb5e18c12c7fef392758f6e73698' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\jz.htm',
      1 => 1444268818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98275615cb1649f318-57526572',
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
                    <img src="../images/jz-1.jpg" /></div>
                <div>
                    <div class="float">
                        <div class="con-left01">
                        
                            <div class="con-left-zx">
                                <img src="../images/knowledge-zv.png" />申请/捐助<span class="con-left-news">NEWS</span></div>
                            <div class="con-left-mt">
                                <a href="/sqs/jz/application.php">义工申请</a></div>
                            <div class="con-left-lz">
                                <a href="/jz/jz.php">捐助</a></div>
                                
                        </div>
                        <div class="con-left02">
                            <div>
                            <a href="/about/contactus.php?id=3">
                                <div class="float con-left-lx s1">
                                    联系我们
                                 </div>
                            </a>
                           <a href="/jz/application.php">
                                <div class="float con-left-lx s2">
                                    义工申请
                                </div>
                            </a>
                                <div class="clear">
                                </div>
                            </div>
                            <div>
                              <a href="/jz/jz.php">
                                <div class="float con-left-lx s3">
                                    捐助
                                </div>
                            </a>
                             <a href="/hand/hand.php">
                                <div class="float con-left-lx s4">
                                    消息广告
                                </div>
                           </a>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float">
                        <div class="con-right">
                            <div class="con-right-wz">
                                您现在的位置：<a href="../index.php">首页 </a>> <a href="../jz/jz.php">申请/捐助</a> > 捐助</div>
                            <div class="con-right-lz">
                                捐助</div>
                            <div class="knowledge-tp">
                                <div class="jz-1 hand4-top">
                                    <div class="float contact-right jz-left hand4-top jz-t1">
                                    
                                        <div>
                                            <img src="../images/jz-4.jpg" /></div>
                                        <div class="jz-t1s">
                                            外链某某企业捐助1</div>
                                    </div>
                                    
                                    <div class="float hand4-top .jz-t2">
                                    
                                        <div>
                                            <img src="../images/jz-5.jpg" /></div>
                                        <div class="jz-t2s">
                                            外链某某企业捐助2</div>
                                    </div>
                                    <div class="clear">
                                    </div>
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
                                <div class="jz dw-top">
                                <a href="/jz/jz-under1.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
                                    <div class="jz-left float">
                                        <img src="../<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" />
                                        </div>
                                        </a>
                                    <div class="float">
                                        <dl>
                                            <dt> <a href="/jz/jz-under1.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</a></dt>
                                            <dd>
                                             <?php echo mb_substr($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents'],0,50,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents'])>90){?>...<?php }?>
                                            </dd>
                                        </dl>
                                        <div>
                                            <div class="jz-lj float contact-right jz-left" style="background-color:#d21010;">
                                                <a href="/jz/jz-under1.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">我要捐款>></a></div>
                                            <div class="jz-lj float ">
                                                <a href="../#">捐款须知>></a></div>
                                            <div class="clear">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear">
                                    </div>
                                </div>
                               <?php endfor; endif; ?> 
                                
                                    </div>
                                    <div class="clear">
                                    </div>
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
