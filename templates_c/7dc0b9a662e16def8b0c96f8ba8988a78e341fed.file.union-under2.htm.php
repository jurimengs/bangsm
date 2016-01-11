<?php /* Smarty version Smarty-3.0.7, created on 2015-10-02 06:49:20
         compiled from "G:/wamp/www//sqs/templates\union-under2.htm" */ ?>
<?php /*%%SmartyHeaderCode:8177560e28f08a8ec3-42325828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc0b9a662e16def8b0c96f8ba8988a78e341fed' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\union-under2.htm',
      1 => 1443759589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8177560e28f08a8ec3-42325828',
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
                    <img src="../images/lm.jpg" /></div>
                <div>
                    <div class="float">
                        <div class="con-left01">
   <!-- 左侧导航 -->                                      
 <div class="con-left-zx">
	<img src="../images/knowledge-zv.png" />&nbsp 联盟版块<span class="con-left-news">NEWS</span>
 </div>
 <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('left_uoion')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
 <div <?php if ($_smarty_tpl->getVariable('left_uoion')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==$_smarty_tpl->getVariable('typeid')->value){?> class="con-left-lz"<?php }else{ ?>class="con-left-mt"<?php }?>>
           <a href="/sqs/union/union-under1.php?typeid=<?php echo $_smarty_tpl->getVariable('left_uoion')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('left_uoion')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
    </div>
  <?php endfor; endif; ?> 
 <!-- /左侧导航 -->                             
                        </div>
                        <div class="con-left02">
                            <div>
                                 <a href="/sqs/about/contactus.php?id=3">
                                <div class="float con-left-lx lm-s1">
                                    联系我们
                                </div>
                             </a>   
                             <a href="/sqs/jz/application.php">
                                <div class="float con-left-lx lm-s2">
                                    义工申请
                                 </div>
                              </a>
                                <div class="clear">
                                </div>
                            </div>
                            <div>
                            <a href="/sqs/jz/jz.php">
                                <div class="float con-left-lx lm-s3">
                                    捐助
                                  </div>
                               </a>
                             <a href="/sqs/hand/hand.php">     
                                <div class="float con-left-lx lm-s4">
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
                                您现在的位置：<a href="../index.php">首页</a> > <a href="../union/union.php">联盟版块</a> > <a href="union.htm"><?php echo $_smarty_tpl->getVariable('name')->value['name'];?>
</a></div>
                            <div class="con-right-lz">
                                <?php echo $_smarty_tpl->getVariable('name')->value['name'];?>
</div>
                            <div class="con-right-st">
                                <div class="float">
                                    <img src="../images/lz-n2.jpg" /></div>
                                <div class="float nst">
                                    <p class="title">
                                        <?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>

                                     </p>
                                    
                                    <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

                                    
                                </div>
                                <div>
                                    <a href="javascript:void(0)" onclick="javascript:history.back(-1);">
                                     <button class="button-back" style="cursor:pointer;" >
                                        返回
                                   </button>
                                 </a></div>
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
