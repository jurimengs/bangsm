<?php /* Smarty version Smarty-3.0.7, created on 2015-10-03 09:16:28
         compiled from "G:/wamp/www//sqs/templates\union-under1.htm" */ ?>
<?php /*%%SmartyHeaderCode:32478560f9cece265f3-32588242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736c19ceb48f4f99cb1b745a8f940c04a7070eae' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\union-under1.htm',
      1 => 1443863785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32478560f9cece265f3-32588242',
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
                        
                             <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                                
                        </div>
                        <div class="con-left02">
                            <div>
                                 <a href="/about/contactus.php?id=3">
                                <div class="float con-left-lx lm-s1">
                                    联系我们
                                </div>
                             </a>   
                             <a href="/jz/application.php">
                                <div class="float con-left-lx lm-s2">
                                    义工申请
                                 </div>
                              </a>
                                <div class="clear">
                                </div>
                            </div>
                            <div>
                            <a href="/jz/jz.php">
                                <div class="float con-left-lx lm-s3">
                                    捐助
                                  </div>
                               </a>
                             <a href="/hand/hand.php">     
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
                                &nbsp &nbsp 您现在的位置：<a href="../index.php">首页</a> > <a href="union.php">联盟版块</a> > <?php echo $_smarty_tpl->getVariable('name')->value['name'];?>
</div>
                            <div class="con-right-lz">
                                <?php echo $_smarty_tpl->getVariable('name')->value['name'];?>
</div>
                            <div class="knowledge-tp">
                                <div>
                                <div class="info">
									<div>
									<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('typeid')->value;?>
" id="typeid"/>
									<select id="s_province" name="s_province" class="select-sheng" style="width:100px; margin-left:350px; height:19px;"></select>
								    <select id="s_city" name="s_city" class="select-shi" style="width:100px; margin-left:0px; height:19px;"></select>
								    <select id="s_county" name="s_county" style="width:80px; margin-left:0px; height:19px;"></select>
								    <script class="resources library" src="../js/area.js" type="text/javascript" class="select-shi" ></script>
								    <script type="text/javascript">_init_area();</script>
								    <input type="button" id="but" style="background:url(../images/search_btn.png);width:15px; height:15px;border:0 none; cursor: pointer;margin-top:0px;">
								    </div>
								    <div id="show"></div>
								</div>
                                  
                                </div>
                                <ul class="lm">
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
                                        <img src="../<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" class="display" />
                                        <span class="dx">
                                         <?php if ($_smarty_tpl->getVariable('log')->value==0){?>
                                         <a href="javascript:void(0);" class="xia"  onclick="javascript:(alert('登录后才可以查看！'))">
                                        <?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
>>
                                        </a>
                                         <?php }else{ ?>
                                         <a href="union-under2.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
&typeid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id'];?>
">
                                        <?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
>>
                                        </a>
                                         <?php }?>
                                        
                                        </span>
                                    </li>
                                    <?php endfor; else: ?>
                                    <li>没有相关信息</li>
                                 <?php endif; ?> 
                                    <div class="clear">
                                    </div>
                                </ul>
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
   <script type="text/javascript">
var Gid  = document.getElementById ;
var showArea = function(){
	Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + 	
	Gid('s_city').value + " - 县/区" + 
	Gid('s_county').value + "</h3>"
							}
Gid('s_county').setAttribute('onchange','showArea()');

</script> 
    <script>
    $("#but").click(function(){
		
		location.href="/sqs/union/union-under1.php?s_province="+$("#s_province").val()+"&s_city="+$("#s_city").val()+"&s_county="+$("#s_county").val()+"&typeid="+$("#typeid").val();
    });

    </script>
</body>
</html>
