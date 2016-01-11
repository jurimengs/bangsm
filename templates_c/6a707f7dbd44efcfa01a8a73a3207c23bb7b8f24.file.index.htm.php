<?php /* Smarty version Smarty-3.0.7, created on 2015-10-10 10:03:46
         compiled from "G:/wamp/www//sqs/templates\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:308665618e28220f883-67315616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a707f7dbd44efcfa01a8a73a3207c23bb7b8f24' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\index.htm',
      1 => 1444353409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308665618e28220f883-67315616',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'G:\wamp\www\sqs\smarty\plugins\modifier.date_format.php';
?>﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>index</title>
    <link rel="Stylesheet" href="css/hand.css" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" href="css/banner.css" type="text/css">
    <script type="text/javascript" src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/banner.js"></script>

<script src="jquery/Validform_Datatype.js" type="text/javascript"></script>
<script src="jquery/Validform_v5.3.2_min.js" type="text/javascript"></script>
    
</head>
<body>
    <div style="position: relative;">
        <div id="black" style="display: none; position: absolute; z-index: 10; width: 100%;
            height: 100%; background-color: Black; filter: alpha(opacity=90); /*ie滤镜，透明度50%*/
-moz-opacity: 0.9; /*firefox私有，透明度50%*/
opacity: 0.9; /*其他，透明度50%*/">
        </div>
        <!--top-->
        <div class="warp">
            <div class="top">
                <div class="logo float">
                    <img src="images/logo.jpg" /></div>
                     <?php if (empty($_smarty_tpl->getVariable('nowuser',null,true,false)->value)){?> 
                <div class="float">
                    <div class="dl float">
                        登录
                   </div>
                    <div class="float">
                        <a href="login/zc.php">
                            <button class="btn-zc">
                                注册
                             </button>
                          </a>
                   </div>
                    <?php }else{ ?>
                    <div class="float">
                    <a href="/login/member.php"> 
                    <div class="lo float">
                        <?php echo $_smarty_tpl->getVariable('nowuser')->value;?>

                   </div>
                   </a>
                    <div class="float">
                        <a href="/tuichu.php">
                            <button class="btn-zc">
                                退出
                             </button>
                          </a>
                   </div>
                    <?php }?>
                    <div class="float">
                        <input value="请搜索关键词" class="input-search" /></div>
                    <div class="float">
                        <button class="button-search">
                        </button>
                    </div>
                    <div class="clear">
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <!--tab-->
        <div class="tab-warp">
            <div class="tab">
                <ul>
                    <li><a href="index.php" style="position: relative;">首页 </a><span class="sb1"></span>
                    </li>
                    <li><a href="knowledge/knowledge.php">资讯空间</a> <span class="sb1"></span></li>
                    <li><a href="forum/forum.php">论坛版块 </a><span class="sb1"></span></li>
                    <li><a href="union/union.php">联盟版块</a> <span class="sb1"></span></li>
                    <li><a href="hand/hand.php">手牵手资讯</a> <span class="sb1"></span></li>
                    <li><a href="jz/jz.php">申请/捐助</a> <span class="sb1"></span></li>
                </ul>
                
                <div class="xl">
                    <dl class="xl-left">
                        <dt>消息公告</dt>
                    </dl>
                    <dl>
                        <dt>服务展示</dt>
                        <dd>
                            生命花园</dd>
                        <dd>
                            后顾无忧</dd>
                        <dd>
                            爱陪伴互助会</dd>
                        <dd>
                            社会活动</dd>
                    </dl>
                    <dl>
                        <dt>义工风采</dt>
                    </dl>
                    <dl>
                        <dt>机构展示/团队构架</dt>
                        <dd>
                            机构介绍</dd>
                        <dd>
                            机构架构</dd>
                        <dd>
                            团队展示</dd>
                    </dl>
                    <dl>
                        <dt>
                            <img src="images/xl1.jpg" /></dt>
                    </dl>
                    <dl>
                        <dt>
                            <img src="images/xl2.jpg" /></dt>
                    </dl>
                </div>
            </div>
        </div>
        
        <!--banner-->
        <div class="banner_index">
            <a href="javascript:void(0);" class="btn btnPre" id="banner_index_pre"></a><a href="javascript:void(0);"
                class="btn btnNext" id="banner_index_next"></a>
            <ul class="banner_wrap" id="banner_index">
                <li style="background: url(images/banner2.jpg); height: 332px;">
                    <p class="banner-font1">
                        安老关怀</p>
                    <p class="banner-font2">
                        <span class="banner-span1">让我们共同携手</span></p>
                    <p class="banner-font2">
                        <span class="banner-span2">帮助那些孤苦无依的老人</span></p>
                    <p class="banner-font2">
                        让他们暗度晚年 谱写生命赞歌</p>
                    <a href="#" target="_blank"></a></li>
                <li style="background: url(images/banner2.jpg); height: 332px;"><p class="banner-font1">
                        安老关怀</p>
                    <p class="banner-font2">
                        <span class="banner-span1">让我们共同携手</span></p>
                    <p class="banner-font2">
                        <span class="banner-span2">帮助那些孤苦无依的老人</span></p>
                    <p class="banner-font2">
                        让他们暗度晚年 谱写生命赞歌</p><a href="#" target="_blank">
                </a></li>
                <li style="background: url(images/banner2.jpg); height: 332px;"><p class="banner-font1">
                        安老关怀</p>
                    <p class="banner-font2">
                        <span class="banner-span1">让我们共同携手</span></p>
                    <p class="banner-font2">
                        <span class="banner-span2">帮助那些孤苦无依的老人</span></p>
                    <p class="banner-font2">
                        让他们暗度晚年 谱写生命赞歌</p><a href="#" target="_blank">
                </a></li>
                <li style="background: url(images/banner2.jpg); height: 332px;"><p class="banner-font1">
                        安老关怀</p>
                    <p class="banner-font2">
                        <span class="banner-span1">让我们共同携手</span></p>
                    <p class="banner-font2">
                        <span class="banner-span2">帮助那些孤苦无依的老人</span></p>
                    <p class="banner-font2">
                        让他们暗度晚年 谱写生命赞歌</p><a href="#" target="_blank">
                </a></li>
            </ul>
        </div>
        <script type="text/javascript">
            var ShowPre1 = new ShowPre({ box: "banner_index", Pre: "banner_index_pre", Next: "banner_index_next", numIco: "index_numIco", loop: 1, auto: 1 });
        </script>
        <!--con-->
        <div class="con-warp">
            <div class="con">
                <div class="con-top">
                    <div class="float">
                        <div class="media">
                            <div class="float">
                                <img src="images/media.png" />
                            </div>
                            <div class="media-title float">
                                媒体广角</div>
                            <div class="clear">
                            </div>
                        </div>
                        <div>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('news')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <div class="float media-tp">
                                <a href="/knowledge/knowledge-under2.php?whatid=<?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
&typeid=<?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['typeid'];?>
&id=1">
                                	<img src="<?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" />
                               </a>
                             </div>
                         <?php endfor; endif; ?>    

                            
                            <div class="clear">
                            </div>
                        </div>
                        <div>
                        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('news')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <div class="float media-span" >
                             <a href="/knowledge/knowledge-under2.php?whatid=<?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
&typeid=<?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['typeid'];?>
&id=1">
                               <?php echo $_smarty_tpl->getVariable('news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>

                                </a>
                            </div>
            	    <?php endfor; endif; ?>       
                     
                            <div class="clear">
                            </div>
                        </div>
                    </div>
                    <div class="float information">
                        <div class="information-title">
                            <div class="float">
                                <img src="images/information.png" /></div>
                            <div class="media-title float">
                                资讯空间</div>
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
                        <div class="information-span media-tp">
                            <div class="float information-left">
                                <a href="/knowledge/knowledge-under2.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['whatid'];?>
&typeid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['typeid'];?>
&id=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo mb_substr($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'],0,15,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'])>15){?>...<?php }?></a></div>
                            <div class="float">
                               <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time'],"%Y-%m-%d");?>
</div>
                            <div class="clear">
                            </div>
                        </div>
                     <?php endfor; endif; ?>
                       
                        
                    </div>
                    <div class="float heart">
                        <div class="media">
                            <div class="float">
                                <img src="images/heart.png" /></div>
                            <div class="media-title float">
                                爱心捐赠</div>
                            <div class="clear">
                            </div>
                        </div>
                        <div class="media-tp">
                            <a href="/jz/jz-under1.php?whatid=<?php echo $_smarty_tpl->getVariable('jz')->value['id'];?>
"><img src="<?php echo $_smarty_tpl->getVariable('jz')->value['image'];?>
"  style="width:234px;"/></a></div>
                        <div class="heart-span media-tp">
                            <p class="heart-sw">
                                <a href="/jz/jz-under1.php?whatid=<?php echo $_smarty_tpl->getVariable('jz')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('jz')->value['title'];?>
</a></p>
                            <p><a href="/jz/jz-under1.php?whatid=<?php echo $_smarty_tpl->getVariable('jz')->value['id'];?>
">
                               <?php echo mb_substr($_smarty_tpl->getVariable('jz')->value['contents'],50,50,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('jz')->value['contents'])>50){?>...<?php }?></a></p>
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                </div>
                <div class="con-bottom">
                    <div class="news float">
                        <div>
                            <div class="float">
                                <img src="images/news.jpg" /></div>
                            <div class="float news-title">
                                &nbsp 最新消息</div>
                            <div class="clear">
                            </div>
                        </div>
         
                        <div class="news-span2" style=" background:#efefef;">
                            <div class="float news-02" style="color: #7ca63c;">
                               01
                            </div>
                            <dl class="float">
                                <dt><a href="/hand/hand-xiangqing.php?whatid=<?php echo $_smarty_tpl->getVariable('zixun1')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('zixun1')->value['title'];?>
</a></dt>
                                <dd>
                                <a href="/hand/hand-xiangqing.php?whatid=<?php echo $_smarty_tpl->getVariable('zixun1')->value['id'];?>
"> <?php echo mb_substr($_smarty_tpl->getVariable('zixun1')->value['contents'],50,20,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('zixun1')->value['contents'])>20){?>...<?php }?></a>
                                </dd>
                            </dl>
                            <div class="clear">
                            </div>
                        </div>
        				<div class="news-span2" >
                            <div class="float news-02" >
                               02
                            </div>
                            <dl class="float">
                                <dt><a href="/hand/hand-xiangqing.php?whatid=<?php echo $_smarty_tpl->getVariable('zixun2')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('zixun2')->value['title'];?>
</a></dt>
                                <dd>
                                <a href="/hand/hand-xiangqing.php?whatid=<?php echo $_smarty_tpl->getVariable('zixun2')->value['id'];?>
"> <?php echo mb_substr($_smarty_tpl->getVariable('zixun2')->value['contents'],50,20,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('zixun2')->value['contents'])>20){?>...<?php }?></a>
                                </dd>
                            </dl>
                            <div class="clear">
                            </div>
                        </div>
                    
                        
                    </div>
                    <div class="float paterment">
                        <div class="paterment-title">
                            <div class="float">
                                <img src="images/paterment.jpg" /></div>
                            <div class="float news-title">
                                &nbsp 合作伙伴</div>
                            <div class="clear">
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="#"><img src="images/paterment-t1.jpg" style="display: block;" />东林寺慈善</li></a><a><li>
                                   <a href="#"><img src="images/paterment-t2.jpg" style="display: block;" />人民关怀医院</li></a><a><li>
                                        <a href="#"><img src="images/paterment-t3.jpg" style="display: block;" />保康医院</li></a><a><li>
                                           <a href="#"><img src="images/paterment-t4.jpg" style="display: block;" />东兴区人民医院</li></a></ul>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <div class="footer-warp">
            <div class="footer">
                <div class="float footer-left">
                    <p class="footer-span">
                         <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('navfoot')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			    <a href="/<?php echo $_smarty_tpl->getVariable('navfoot')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
?id=<?php echo $_smarty_tpl->getVariable('navfoot')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('navfoot')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>  <?php if ($_smarty_tpl->getVariable('navfoot')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']=='7'){?> <?php }else{ ?>| <?php }?> 
			    <?php endfor; endif; ?>
                       </p>
                    <p>
                        © 2008-2015 上海市浦东新区峨山路613号A楼711-712室<span class="media-tp">&nbsp&nbsp&nbsp 邮编:200127</span></p>
                    <p>
                        Email:Volunteer@hihcc.org Powered by Alsovalue</p>
                </div>
                <div class="float">
                    <div class="float footer-fx">
                        分享</div>
                    <div class="float footer-st">
                    </div>
                    <ul class="float">
                        <li>
                            <img src="images/footer-1.jpg" /></li><li>
                                <img src="images/footer-2.jpg" /></li><li>
                                    <img src="images/footer-3.jpg" /></li><li>
                                        <img src="images/footer-4.jpg" /></li><li>
                                            <img src="images/footer-5.jpg" /></li></ul>
                    <div class="clear">
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="box-cover-dl" style="display: none;">
            <div class="tc-dl">
                <div class="tc-title">
                    <div class="float tc-title-dl">
                        用户登录</div>
                    <div class="float tc-title-bt">
                        <img src="images/mihao.png" />为必填项</div>
                    <div class="float cha">
                        <img src="images/cha.png" /></div>
                    <div class="clear">
                    </div>
                </div>
                <form action="/sqs/login/login.php" method="post" name="loginform" class="loginform">
                <ul>
                
                    <li class="tc-title--sj">
                        <img src="images/mihao.png" /><span style="font-size: 12px;">邮箱</span> /用户名 /手机：
                        <?php if (empty($_smarty_tpl->getVariable('username',null,true,false)->value)){?>
                        <input class="tc-title-input"  name="username"  id="user1"/>
                        <?php }else{ ?>
                        <input class="tc-title-input"  name="username"  id="user1" value="<?php echo $_smarty_tpl->getVariable('username')->value;?>
"/>
                        <?php }?>
                     </li>
                            
                    <li class="tc-title--mm">
                        <img src="images/mihao.png" />密码：
                        <?php if (empty($_smarty_tpl->getVariable('password',null,true,false)->value)){?>
                        <input class="tc-title-input2"  name="password" id="paw1" type="password"/>
                        <?php }else{ ?>
                        <input class="tc-title-input2"  name="password" id="paw1"  type="password" value="<?php echo $_smarty_tpl->getVariable('password')->value;?>
"/>
                        <?php }?>
                        &nbsp <span class="blod">
                           您忘记密码了吗？</span></li>
                    <li class="tc-title--yz">
                        <img src="images/mihao.png" />验证码：
                        <input class="tc-title-input3" name="code" id="code1" maxlength="4" />
						<img src="/includes/authcode.fun.php" id="validatecode3" onclick="fleshVerify3()" width="56" height="24" alt="" style="vertical-align:bottom; margin-bottom:3px;">
						<a href="javascript:fleshVerify3()"  style="color:#6F6F6F">看不清？点击更换</a>
                    <li class="tc-title--bc">
                        <input type="checkbox"  value="1" id="bc"/>
                        请保存我这次的登录信息</li>
                </ul>
                <div>
                    <div >
               <input type="button" id="btn1" value="登 录" name="submitBT" class="tc-button-dl float"/>
                     </div>
                    <a class="float tc-button-zc" href="login/zc.php">立即注册</a>
	                    <div class="clear">
	                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
  



 <script>
$(document).ready(function(){ 

	$(".button-search").click(function(){
		var sou=$(".input-search").val();
		location.href="/sou/sou.php?sou="+sou;	
	});  
	
    $(".tab").hover(function () {
        $(".xl").show();
    }, function () {
        $(".xl").hide();
    });
    $('.dl').click(function () {
        $('.box-cover-dl').show();
        $('#black').show();
        return false;
    });
    $('.cha').click(function () {
        $('.box-cover-dl').hide();
        $('#black').hide();
    });
   
    $(".hand-n3 div:nth-child(3n)").css({"margin-right":"0"});
////////////////注册    
  
   $("#btn1").click(function(){
	   if($("#user1").val()=='')
		   {
		   alert("账号不能为空");
		   return false;
		   }
	   else if($("#paw1").val()=='')
	   {
	   alert("密码不能为空");
	   return false;
	   }
	   else if($("#code1").val()=='')
	   {
	   alert("验证码不能为空");
	   return false;
	   }
	   $.post(
			   "/login/login.php",
			   "user="+$("#user1").val()+"&paw="+$("#paw1").val()+"&code="+$("#code1").val()+"&cook="+$("#bc").val(),
			   function(date)
			   {
				   if(date=="1")
					   {
					   	alert("登录成功");
					   	location.href="/index.php";
					   }
				   else
					   {
					   alert(date);
					   }
				   
			   }
	   
	   );
   });
 
});
</script>  

</body>
</html>
