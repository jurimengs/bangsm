<?php /* Smarty version Smarty-3.0.7, created on 2015-10-03 09:38:43
         compiled from "G:/wamp/www//sqs/templates\knowledge-under2.htm" */ ?>
<?php /*%%SmartyHeaderCode:25301560fa223bf96d9-92889559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282d0afebdcaaf58e8eaabfdfa1670c81c3ce3c4' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\knowledge-under2.htm',
      1 => 1443845663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25301560fa223bf96d9-92889559',
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
                    <img src="../images/xw-top.jpg" /></div>
                <div>
                    <div class="float">
                        <div class="con-left01 nav-left">
                            <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                           <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('left_zixun')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <div <?php if ($_smarty_tpl->getVariable('left_zixun')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==$_smarty_tpl->getVariable('typeid2')->value){?>class="con-left-menu"<?php }else{ ?>class="con-left-menu2"<?php }?>>
                                <img src="../images/sanjiao.png" /><a href="/sqs/knowledge/knowledge-under1.php?whatid=<?php echo $_smarty_tpl->getVariable('left_zixun')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
&typeid=<?php echo $_smarty_tpl->getVariable('left_zixun')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['parent_id'];?>
"><?php echo $_smarty_tpl->getVariable('left_zixun')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
                               </div>
                   				<?php endfor; endif; ?>	
                        </div>
                        <div class="con-left02">
                        
                            <div>
                                 <a href="/sqs/about/contactus.php?id=3">
                                <div class="float con-left-lx s1">
                                    联系我们
                                </div>
                             </a>   
                             <a href="/sqs/jz/application.php">
                                <div class="float con-left-lx s2">
                                    义工申请
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
                               
                             <a href="/sqs/hand/hand.php">     
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
                                您现在的位置：<a href="../index.php">首页</a> > <a href="knowledge.php">资讯空间</a> > <a href="knowledge.php">临终知识</a>
                             </div>
                            <div class="con-right-lz">
                                <?php echo $_smarty_tpl->getVariable('title')->value['name'];?>

                            </div>
                            <div class="con-right-st">
	                                <div class="float">
	                                    <img src="../images/lz-n2.jpg" />
	                                </div>
	                                <div class="float nst">
	                                    <p class="title">
	                                    <?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>

	                                     </p>
	                                   <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

	                                 <a href="javascript:void(0)" onclick="javascript:history.back(-1);">
	                                <div>
	                                   <button class="button-back" >
	                                        返回</button>
	                                </div></a>
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
