<?php /* Smarty version Smarty-3.0.7, created on 2015-09-29 06:44:15
         compiled from "G:/wamp/www//sqs/templates\hand-under3.htm" */ ?>
<?php /*%%SmartyHeaderCode:21205560a333f261e57-14756785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03795c7f7cfca454973fb2d03c0b9f90b1f3fdf2' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\hand-under3.htm',
      1 => 1443411454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21205560a333f261e57-14756785',
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
    <div> <img src="../images/hand.png" /></div>
    <div>
      <div class="float">
        <div class="con-left01">
          <div class="con-left-zx"> <img src="../images/knowledge-zv.png" />&nbsp 手牵手资讯<span class="con-left-news">NEWS</span></div>
          <div class="con-left-mt"> <a href="/sqs/hand/hand.php">消息公告</a></div>
          <div class="con-left-mt"> <a href="/sqs/hand/hand-under1.php">服务展示</a></div>
          <div class="con-left-lz"> <a href="/sqs/hand/hand-under3.php">义工风采</a></div>
        </div>
        <div class="con-left02">
          <div> <a href="/sqs/hand/hand-under1.php">
            <div class="float con-left-lx hand1"> 服务展示 </div>
            </a> <a href="javascript:void(0)">
            <div class="float con-left-lx hand2"> 论坛中心 </div>
            </a>
            <div class="clear"> </div>
          </div>
          <div> <a href="javascript:void(0)">
            <div class="float con-left-lx s3"> 老年生活 </div>
            </a> <a href="/sqs/hand/hand-under3.php">
            <div class="float con-left-lx hand4"> 义工风采 </div>
            </a>
            <div class="clear"> </div>
          </div>
        </div>
      </div>
      <div class="float">
        <div class="con-right">
          <div class="con-right-wz"> 您现在的位置：<a href="../index.php">首页</a> > <a href="hand.php">手牵手资讯 </a>> 义工风采</div>
          <div class="con-right-lz"> 义工风采</div>
          <div class="hand-n3">
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
          <a href="hand-under4.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
              <div class="float">
                <div class="hand3-1"> <img src="../<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['simage'];?>
"  alt=""> <span></span> </div>
                <div class="hand-n3-lj"> <a href="hand-under4.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</a></div>
              </div>
              </a>
     	   <?php endfor; endif; ?>      

          </div>
            <div class="fy">
              <ul>
              <?php echo $_smarty_tpl->getVariable('pager')->value;?>

   
              </ul>
              <div class="clear"> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"> </div>
    </div>
  </div>
</div>
<!--footer--> 
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body></html>