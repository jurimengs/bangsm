<?php /* Smarty version Smarty-3.0.7, created on 2015-10-03 03:53:10
         compiled from "G:/wamp/www//sqs/templates\jz-under1.htm" */ ?>
<?php /*%%SmartyHeaderCode:5006560f51268146e8-59209496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72b22ab137b6b5f710ddd1c26061b40000e59f30' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\jz-under1.htm',
      1 => 1443759606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5006560f51268146e8-59209496',
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
                                <a href="/sqs/jz/jz.php">捐助</a></div>
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
                                您现在的位置：<a href="../index.php">首页 </a>> <a href="../jz/jz.php">申请/捐助</a>> 捐助</div>
                            <div class="con-right-lz">
                                捐助
                            </div>
                            <div>
                                <?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

                                
                                <div class="jz-n1-mut"> 
                                <div class="float jz-n1-know">捐赠须知>></div>
                                <div class="float jz-n1-back"><a href="/sqs/jz/jz.php">返回</a></div>
                                <div class="clear"></div>
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
    </div>
</body>
</html>
