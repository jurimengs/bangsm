<?php /* Smarty version Smarty-3.0.7, created on 2015-11-04 09:35:29
         compiled from "G:/wamp/www//jl/templates\culture-video.html" */ ?>
<?php /*%%SmartyHeaderCode:279415639d161f13af8-59204331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b839f564eb7bcb5b8d6dbe30b05117f275a3262d' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\culture-video.html',
      1 => 1446628253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279415639d161f13af8-59204331',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->getVariable('web')->value['title'];?>
</title>
    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</head>
<body>
<?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="cbanner">
    <img src="../images/culture/culture.png">
</div>
<div class="cmain">
     <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <div class="cmain_rightarea">
        <div class="cmain_4">
            <div class="cmain_rightarea_title">
                <h3><span></span>视频中心</h3>

                <div class="cmain_rightarea_title_word">您的位置：首页 > 企业文化 > 视频中心</div>
            </div>
            <div class="cmain_4_video">
                <object class="videos" id="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
                        width="594" height="330">
                    <param name="movie" value="flvplayer.swf">
                    <param name="quality" value="high">
                    <param name="allowFullScreen" value="true">
                    <param name="FlashVars"
                           value="vcastr_file=<?php echo $_smarty_tpl->getVariable('xiangqing')->value['ziliao'];?>
&LogoText=www.lanrentuku.com&BufferTime=3&IsAutoPlay=0">
                    <embed class="videos1" src="../flvplayer.swf" allowfullscreen="true"
                           flashvars="vcastr_file=<?php echo $_smarty_tpl->getVariable('xiangqing')->value['ziliao'];?>
&LogoText=www.lanrentuku.com&IsAutoPlay=0" quality="high"
                           pluginspage="http://www.macromedia.com/go/getflashplayer"
                           type="application/x-shockwave-flash"
                           width="594" height="330"></embed>
                </object>

            </div>
            <div class="videowr">
            <div class="video_list">
                <ul>
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
                <a href="/culture/culture_video.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
                    <li>
                    <img src="../images/culture/culturelist.png">
                        <div class="listcop"> <?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</div>
                        <div class="video"></div>
                    </li>
                   </a> 
                <?php endfor; endif; ?>    
                   
                </ul>

            </div>
                <a href="javascript:void(0)" class="videoprev">
                    <span class="row1"></span>
                </a>
                <a href="javascript:void(0)" class="videonext">
                    <span class="row2"></span>
                </a>
            </div>
            <h2 class="cmain4_ti"><?php echo $_smarty_tpl->getVariable('xiangqing')->value['title'];?>
</h2>

        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>