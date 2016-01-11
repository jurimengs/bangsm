<?php /* Smarty version Smarty-3.0.7, created on 2015-10-09 01:10:22
         compiled from "G:/wamp/www//sqs/templates\sou.html" */ ?>
<?php /*%%SmartyHeaderCode:4057561713fe44fac4-10569717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e722991c02804d1c6326ea601b3648de708a7d83' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\sou.html',
      1 => 1443845210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4057561713fe44fac4-10569717',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
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
                                <img src="../images/knowledge-zv.png" />&nbsp 搜索<span class="con-left-news"></span></div>
                        </div>
                        <div class="con-left02">
                            <div>
                            <a href="/hand/hand.php">
                                <div class="float con-left-lx hand1">
                                    手牵手资讯</div></a>
                                    <a href="/hand/hand-under3.php">
                                <div class="float con-left-lx hand2">
                                    义工风采</div></a>
                                    
                                <div class="clear">
                                </div>
                            </div>
                            <div>
                            <a href="/jz/jz.php">
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
                                您现在的位置：<a href="index.htm">首页</a> > <a href="about-us.htm">辅助栏目</a> > 站内搜索</div>
                            <div class="con-right-lz">
                                搜索结果</div>
                                <div class="contact-title"></div>

					<ul class="search-list">
					<?php if ($_smarty_tpl->getVariable('count1')->value==0&&$_smarty_tpl->getVariable('count2')->value==0&&$_smarty_tpl->getVariable('count3')->value==0&&$_smarty_tpl->getVariable('count4')->value==0){?>
						<li>
						     <h3>没有相关信息</h3>
						</li> 
						<?php }else{ ?>	 
							   
							<?php if ($_smarty_tpl->getVariable('count1')->value>0){?>
						    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('list1')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><!-- case -->
						        <li>
						        <br/>
						            <div style="width:450px; height:100px; border: 1px solid #f0f0f0;">
						            <h3><a href="/knowledge/knowledge-under2.php?whatid=<?php echo $_smarty_tpl->getVariable('list1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
&typeid=<?php echo $_smarty_tpl->getVariable('list1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id'];?>
&id=<?php echo $_smarty_tpl->getVariable('list1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['parent_id'];?>
"><?php echo str_ireplace($_smarty_tpl->getVariable('sou')->value,$_smarty_tpl->getVariable('sou1')->value,$_smarty_tpl->getVariable('list1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']);?>
</a></h3>
						        <br/>
						        <font color="#504E4E">    <p><?php echo mb_substr(str_ireplace($_smarty_tpl->getVariable('sou')->value,$_smarty_tpl->getVariable('sou1')->value,$_smarty_tpl->getVariable('list1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents']),0,55,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('list1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents'])>55){?>...<?php }?></p></font>
						         </div>
						        </li>
							 <?php endfor; endif; ?>
							 <?php }else{ ?>
						     <?php }?>
						     
						     <?php if ($_smarty_tpl->getVariable('count2')->value>0){?>
						    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('list2')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><!-- news -->
						        <li>
						        <br/>
						            <div style="width:450px; height:100px; border: 1px solid #f0f0f0;">
						            <h3><a <?php if ($_smarty_tpl->getVariable('list2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id']==2){?>href="/hand/hand-under2.php?whatid=<?php echo $_smarty_tpl->getVariable('list2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"<?php }elseif($_smarty_tpl->getVariable('list2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id']==3){?>href="/hand/hand-under4.php?whatid=<?php echo $_smarty_tpl->getVariable('list2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"<?php }?>>
						            <?php echo str_ireplace($_smarty_tpl->getVariable('sou')->value,$_smarty_tpl->getVariable('sou1')->value,$_smarty_tpl->getVariable('list2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']);?>
</a></h3> <br/>
						            <font color="#504E4E"><p><?php echo mb_substr(str_ireplace($_smarty_tpl->getVariable('sou')->value,$_smarty_tpl->getVariable('sou1')->value,$_smarty_tpl->getVariable('list2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents']),0,55,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('list2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents'])>55){?>...<?php }?></p></font>
						        </div>
						        </li>
							 <?php endfor; endif; ?> 
							 <?php }else{ ?>
						     <?php }?>
						     
						     <?php if ($_smarty_tpl->getVariable('count3')->value>0){?>
						    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('list3')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><!-- product -->
						        <li>
						        <br/>
						            <div style="width:450px; height:100px; border: 1px solid #f0f0f0;">
						            <h3><a href="/union/union-under2.php?whatid=<?php echo $_smarty_tpl->getVariable('list3')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
&typeid=<?php echo $_smarty_tpl->getVariable('list3')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id'];?>
">
						            <?php echo str_ireplace($_smarty_tpl->getVariable('sou')->value,$_smarty_tpl->getVariable('sou1')->value,$_smarty_tpl->getVariable('list3')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']);?>

						            </a></h3> <br/>
						           <font color="#504E4E"> <p><?php echo mb_substr(str_ireplace($_smarty_tpl->getVariable('sou')->value,$_smarty_tpl->getVariable('sou1')->value,$_smarty_tpl->getVariable('list3')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents']),0,55,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('list3')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents'])>55){?>...<?php }?></p></font>
						     </div>
						        </li>
							 <?php endfor; endif; ?>
							 <?php }else{ ?>
						     <?php }?>
						     
						     <?php if ($_smarty_tpl->getVariable('count4')->value>0){?>
						    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('list4')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><!-- service -->
						        <li>
						            <br/>
						            <div style="width:450px; height:100px; border: 1px solid #f0f0f0;">
						            <h3><a href="/jz/jz-under1.php?whatid=<?php echo $_smarty_tpl->getVariable('list4')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo str_ireplace($_smarty_tpl->getVariable('sou')->value,$_smarty_tpl->getVariable('sou1')->value,$_smarty_tpl->getVariable('list4')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title']);?>
</a></h3> <br/>
						            <font color="#504E4E"><?php echo mb_substr(str_ireplace($_smarty_tpl->getVariable('sou')->value,$_smarty_tpl->getVariable('sou1')->value,$_smarty_tpl->getVariable('list4')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['contents']),0,80,'utf-8');?>
...</font>
						            </div>
						        </li>
						      
							 <?php endfor; endif; ?>
							 <?php }else{ ?>
							 <?php }?>
						
						<?php }?>
			</ul>
					
                       
                       
                       
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
