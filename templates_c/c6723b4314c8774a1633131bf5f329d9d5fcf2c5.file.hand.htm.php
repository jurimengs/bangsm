<?php /* Smarty version Smarty-3.0.7, created on 2015-10-13 01:57:49
         compiled from "G:/wamp/www//sqs/templates\hand.htm" */ ?>
<?php /*%%SmartyHeaderCode:18633561c651d20e207-75188374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6723b4314c8774a1633131bf5f329d9d5fcf2c5' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\hand.htm',
      1 => 1444701465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18633561c651d20e207-75188374',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'G:\wamp\www\sqs\smarty\plugins\modifier.date_format.php';
?>﻿<?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <!--con-->
        <div class="con-warp">
            <div class="con">
                <div>
                    <img src="../images/hand.png" /></div>
                <div>
                    <div class="float">
                        <div class="con-left01">
                        
                          <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
                                
                        </div>
                        <div class="con-left02">
                            <div>
                            
                            <a href="/sqs/hand/hand-under1.php">
                                <div class="float con-left-lx hand1">
                                    服务展示
                                 </div>
                            </a>
                            <a href="javascript:void(0)">
                                <div class="float con-left-lx hand2">
                                    论坛中心
                                 </div>
                               </a>  
                                <div class="clear">
                                </div>
                            </div>
                            <div>
                            <a href="javascript:void(0)">
                                <div class="float con-left-lx s3">
                                    老年生活
                                 </div>
                              </a>
                              <a href="/sqs/hand/hand-under3.php"> 
                                <div class="float con-left-lx hand4">
                                    义工风采
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
                                您现在的位置：<a href="../index.php">首页</a> > <a href="hand.php">手牵手资讯</a> > <a href="hand.php">消息公告</a></div>
                            <div class="con-right-lz">
                                消息公告</div>
                            <div class="hand">
                                <div class="float hand-left">
                                    <p class="title ">
                                     <a href="/sqs/hand/hand-xiangqing.php?whatid=<?php echo $_smarty_tpl->getVariable('top1')->value['id'];?>
" >  <?php echo $_smarty_tpl->getVariable('top1')->value['title'];?>
</a>
                                     </p>
                                    <p>
                                    <a href="/sqs/hand/hand-xiangqing.php?whatid=<?php echo $_smarty_tpl->getVariable('top1')->value['id'];?>
" >    <?php echo mb_substr($_smarty_tpl->getVariable('top1')->value['contents'],0,60,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('top1')->value['contents'])>60){?>...<?php }?></a>
                                    </p>
                                    <p class="title">
                                        <br />
                                      <a href="/sqs/hand/hand-xiangqing.php?whatid=<?php echo $_smarty_tpl->getVariable('top2')->value['id'];?>
" >  <?php echo $_smarty_tpl->getVariable('top2')->value['title'];?>
</a>
                                        </p>
                                    <p>
                                   <a href="/sqs/hand/hand-xiangqing.php?whatid=<?php echo $_smarty_tpl->getVariable('top2')->value['id'];?>
" >     <?php echo mb_substr($_smarty_tpl->getVariable('top2')->value['contents'],0,60,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('top2')->value['contents'])>60){?>...<?php }?></a>
                                    </p>
                                    <ul class="float" >
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
                                      
                                        <li><em style="float:right;"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time'],"%m-%d");?>
</em><a href="/sqs/hand/hand-xiangqing.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" >> <?php echo mb_substr($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'],0,19,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'])>19){?>...<?php }?></a></li>
                                        <?php endfor; endif; ?>
                                    </ul>
                                   
                                    <div class="clear">
                                    </div>
                                    <div class="xy">
                                        <ul>
                                        <?php echo $_smarty_tpl->getVariable('pager')->value;?>

                                         
                                        </ul>
                                        <div class="clear">
                                        </div>
                                    </div>
                                </div>
                                <div class="float hand-right">
                                    <div class="box_news">
                                        <div class="box_width">
                                            <ul>
                                            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('baner')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                <li >
                                                <img src="../images/hand-js.jpg" />
                                                <div>美国老年人越来越长寿老年市场成经济新引擎</div>
                                                </li>
                                             <?php endfor; endif; ?>   
                                                <li>
                                                    <img src="../images/hand-js.jpg" />
                                                   <div>美国老年人越来越长寿老年市场成经济新引擎</div>
                                                </li>
                                                
                                                <li>
                                                   <img src="../images/hand-js.jpg" />
                                                   <div>美国老年人越来越长寿老年市场成经济新引擎</div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    <div class="disc">
                                            <ul>
                                                <li class="choosed"></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    <p class="title">
                                        美国老年人越来越长寿老年市场成经济新引擎</p>
                                    
                                </div>
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
    
    <form method="post" action="/sqs/hand/search.php">
    <input type="text" name="key"/>
    <input type="submit" value="搜索"/>
    </form>
    <script type="text/javascript">
        var index = 0;
        var Len = $(".box_width ul li").length;
        var adTimer;
        $(".disc ul li").mouseover(function () {

            index = $(".disc ul li").index(this);
            showImg(index);
        }).eq(0).mouseover;

        $(".box_news").hover(function () {
            clearInterval(adTimer);
        }, function () {
            adTimer = setInterval(function () {
                showImg(index);
                index++;
                if (index == Len) {
                    index = 0;
                }
            }, 2000)
        }).trigger("mouseleave");


        function showImg(index) {
            var Wid = $(".box_width>ul>li").width();
            $(".box_news .box_width").animate({ left: -Wid * index });
            $(".disc ul li").removeClass("choosed").eq(index).addClass("choosed");

        }
    </script>
</body>
</html>
