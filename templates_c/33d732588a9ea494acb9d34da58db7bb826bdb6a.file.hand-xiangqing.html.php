<?php /* Smarty version Smarty-3.0.7, created on 2015-10-03 09:40:44
         compiled from "G:/wamp/www//sqs/templates\hand-xiangqing.html" */ ?>
<?php /*%%SmartyHeaderCode:16859560fa29c36a864-21988936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33d732588a9ea494acb9d34da58db7bb826bdb6a' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\hand-xiangqing.html',
      1 => 1443846860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16859560fa29c36a864-21988936',
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
                                <img src="../images/knowledge-zv.png" />&nbsp 手牵手资讯<span class="con-left-news">NEWS</span></div>
                            <div class="con-left-lz">
                                <a href="/sqs/hand/hand.php">消息公告</a></div>
                            <div class="con-left-mt">
                                <a href="/sqs/hand/hand-under1.php">服务展示</a></div>
                            <div class="con-left-mt">
                                <a href="/sqs/hand/hand-under3.php">义工风采</a></div>
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
                                您现在的位置：<a href="index.php">首页</a> > <a href="hand.php">手牵手资讯</a> > <a href="hand-under3.php">义工风采</a></div>
                            <div class="con-right-lz">
                                义工风采</div>
                            <div class="hand4">
                                <ul>
                                    <li>
                                        <img src="../images/hand3-1.jpg" /></li>
                                    <li>
                                        <img src="../images/hand3-2.jpg" /></li>
                                    <li>
                                        <img src="../images/hand3-3.jpg" /></li>
                                </ul>
                                <div class="clear">
                                </div>
                                <p class="title">
                                    <br /> <br /><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
</p>
                                
                                			<?php echo $_smarty_tpl->getVariable('xiangqing')->value['contents'];?>

                                
                                
                                    <div class="clear">
                                    </div>
                                
                                      <div>
                                    <a href="javascript:void(0)" onclick="javascript:history.back(-1);">
                                     <button class="button-back" style="cursor:pointer;" >
                                        返回
                                   </button>
                                 </a></div>
                                 <div class="float">
                                    <a href=/sqs/about/download.php?id=4><span class="download-span">文件下载</span></a></div> 
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
