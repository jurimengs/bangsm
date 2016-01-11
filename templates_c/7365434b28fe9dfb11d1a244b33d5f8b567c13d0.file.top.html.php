<?php /* Smarty version Smarty-3.0.7, created on 2015-10-04 02:46:08
         compiled from "G:/wamp/www//sqs/templates\public/top.html" */ ?>
<?php /*%%SmartyHeaderCode:10296561092f013abc5-63170072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7365434b28fe9dfb11d1a244b33d5f8b567c13d0' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\public/top.html',
      1 => 1443926572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10296561092f013abc5-63170072',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>forum</title>
    <link rel="Stylesheet" href="../css/hand.css" type="text/css" />
    <script type="text/javascript" src="../js/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../js/login.js"></script>
<script type="text/javascript" src="../js/riqi.js"></script>
<script src="../js/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="../jquery/Validform_Datatype.js" type="text/javascript"></script>
<script src="../jquery/Validform_v5.3.2_min.js" type="text/javascript"></script>
</head>
<body>

    <div style="position: relative;">
        <div id="black" style="display: none; position: absolute; z-index: 10; width: 100%;
            height: 100%; background-color: Black; filter: alpha(opacity=90); /*ie滤镜，透明度50%*/
-moz-opacity: 0.9; /*firefox私有，透明度50%*/
opacity: 0.9; /*其他，透明度50%*/">
        </div>


<div class="knowledge">

          <div class="warp">
            <div class="top">
                <div class="logo float">
                    <img src="../images/logo.jpg" /></div>
                <?php if (empty($_smarty_tpl->getVariable('nowuser',null,true,false)->value)){?>    
                <div class="float">
                    <div class="dl float">
                        登录
                   </div>
                    <div class="float">
                        <a href="/sqs/login/zc.php">
                            <button class="btn-zc">
                                注册
                             </button>
                          </a>
                   </div>
                   <?php }else{ ?>
                     <div class="float">
                     <a href="/sqs/login/member.php"> 
                    <div class="lo float">
                        <?php echo $_smarty_tpl->getVariable('nowuser')->value;?>

                   </div>
                   </a>
                    <div class="float">
                        <a href="/sqs/tuichu.php">
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
                    <li><a href="../index.php" style="position: relative; margin-left: 30px;">首页 </a>
                    </li>
                    <li><a href="/sqs/knowledge/knowledge.php">资讯空间</a>
                        
                    </li>
                    <li><a href="/sqs/forum/forum.php">论坛版块 </a>
                        
                    </li>
                    <li><a href="/sqs/union/union.php">联盟版块</a>
                        
                    </li>
                    <li><a href="/sqs/hand/hand.php">手牵手资讯</a>
                        
                    </li>
                    <li><a href="/sqs/jz/jz.php">申请/捐助</a>
                        
                    </li>
                </ul>
            </div>
        </div>
     <div class="box-cover-dl" style="display: none;">
            <div class="tc-dl">
                <div class="tc-title">
                    <div class="float tc-title-dl">
                        用户登录</div>
                    <div class="float tc-title-bt">
                        <img src="../images/mihao.png" />为必填项</div>
                    <div class="float cha">
                        <img src="../images/cha.png" /></div>
                    <div class="clear">
                    </div>
                </div>
                <form action="/sqs/login/login.php" method="post" name="loginform" class="loginform">
                <ul>
                
                    <li class="tc-title--sj">
                        <img src="../images/mihao.png" /><span style="font-size: 12px;">邮箱</span> /用户名 /手机：
                        <input class="tc-title-input"  name="username"  id="user" /></li>
                            
                    <li class="tc-title--mm">
                        <img src="../images/mihao.png" />密码：
                        <input class="tc-title-input2"  name="password" id="paw" type="password"/>
                        &nbsp <span class="blod">
                            您忘记密码了吗？</span></li>
                    <li class="tc-title--yz" >
                        <img src="../images/mihao.png" />验证码：
						<input class="tc-title-input3" name="code" id="code" maxlength="4"/>
						<img src="/includes/authcode.fun.php" id="validatecode3" onclick="fleshVerify3()" width="56" height="24" alt=""  style="vertical-align:bottom; margin-bottom:3px;">
						<a href="javascript:fleshVerify3()"  style="color:#6F6F6F">看不清？点击更换</a>
						</li>
                    <li class="tc-title--bc">
                        <input type="checkbox" />
                        请保存我这次的登录信息</li>
                </ul>
                <div>
                    <div >
                       <input type="button" id="btn" value="登 录" name="submitBT"  class="tc-button-dl float"/>
                     </div>
                    <a class="float tc-button-zc" href="/sqs/login/zc.php">立即注册</a>
	                    <div class="clear">
	                    </div>
                </div>
                </form>
            </div>
        </div>