<?php /* Smarty version Smarty-3.0.7, created on 2015-11-23 16:29:53
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/public/left.html" */ ?>
<?php /*%%SmartyHeaderCode:17028975435652ce81548fb7-51348547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04629589aeec39ab49367293f6c78f4905095866' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/public/left.html',
      1 => 1448267135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17028975435652ce81548fb7-51348547',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('yemianid')->value=='conmpany'){?>
    <div class="cmain_leftarea">
        <h2><span>走进嘉隆</span></h2>
        <ul>
            <li <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='conm'){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span><a href="/conmpany/conmpany.php">公司简介</a></li>
            <li <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='struct'){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span><a href="/conmpany/conmpany_struct.php">组织架构</a></li>
            <li <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='history'){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span><a href="/conmpany/conmpany_history.php"> 发展历程</a></li>
            <li <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='honor'){?>class="cmain_leftarea_icon tehh"<?php }else{ ?>class="tehh"<?php }?>><span></span> <a href="javascript:void(0)">公司荣誉</a>
                <ul class="businse_sel" <?php if (!empty($_smarty_tpl->getVariable('tid',null,true,false)->value)){?>style="display:block;"<?php }?>>
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('left_conmpany')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <li <?php if (!empty($_smarty_tpl->getVariable('tid',null,true,false)->value)){?><?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->getVariable('left_conmpany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="background-color:#be980d;"<?php }?><?php }?>><a href="/conmpany/conmpany_honor.php?whatid=<?php echo $_smarty_tpl->getVariable('left_conmpany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" style="font-size:12.5px;color:#000;"><?php echo $_smarty_tpl->getVariable('left_conmpany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
                <?php endfor; endif; ?>
                </ul>
            </li>
            <li <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='porfit'){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span><a href="/conmpany/conmpany_profit.php">社会公益</a></li>
        </ul>
    </div>
    
 <?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='culture'){?>   
     <div class="cmain_leftarea">
        <h2><span>企业文化</span></h2>
        <ul>
            <li <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='linian'){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span><a href="/culture/culture.php">经营理念</a></li>
            <li <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='nk'){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span><a href="/culture/culture_nk.php">企业内刊</a></li>
            <li <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='tu'){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span><a href="/culture/culture_tu.php"> 图片专栏</a></li>
            <li <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='video'){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span> <a href="/culture/culture_video.php">视频中心</a></li>
        </ul>
    </div>
 <?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="news"){?>      
        <div class="cmain_leftarea">
        <h2><span>新闻中心</span></h2>
        <ul>
         <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('top_news')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <li <?php if ($_smarty_tpl->getVariable('whatid')->value==$_smarty_tpl->getVariable('top_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span><a href="/news/news.php?whatid=<?php echo $_smarty_tpl->getVariable('top_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('top_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
          <?php endfor; endif; ?>   

        </ul>
    </div>
  <?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="building"){?>  
  <div class="cmain_leftarea">
        <h2><span>党建工作</span></h2>
        <ul>
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('left_building')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <li <?php if ($_smarty_tpl->getVariable('whatid')->value==$_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>class="cmain_leftarea_icon tehh"<?php }else{ ?>class="tehh"<?php }?>><span></span><a href="javascript:void(0)"><?php echo $_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
                <ul class="businse_sel" <?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?><?php if ($_smarty_tpl->getVariable('whatid')->value==$_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="display:block;"<?php }?><?php }?>>
                	 <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?>
                    <li <?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?><?php if ($_smarty_tpl->getVariable('id')->value==$_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id']){?>style="background-color:#be980d;"<?php }?><?php }?>>
                    
                    <a <?php if ($_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id']=="5"||$_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id']=="9"||$_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id']=="12"){?>
	                     href="/building/building-cont.php?whatid=<?php echo $_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['parent_id'];?>
&parent_id=<?php echo $_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id'];?>
" 
	                    <?php }else{ ?>
	                    href="/building/building.php?whatid=<?php echo $_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['parent_id'];?>
&parent_id=<?php echo $_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id'];?>
" 
	                    <?php }?>
	                    style="font-size:12px;color:#000;"><?php echo $_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'];?>
</a>
                    </li>
					 <?php endfor; endif; ?>  
                </ul>
            </li>
          <?php endfor; endif; ?>  
        
        </ul>
    </div>
      <?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="business"){?>  
    <div class="cmain_leftarea">
        <h2><span>业务介绍</span></h2>
        <ul>
           
            <li <?php if ($_smarty_tpl->getVariable('whatid')->value=="2"){?>class="cmain_leftarea_icon tehh"<?php }else{ ?>class="tehh"<?php }?>><span></span><a href="javascript:void(0)">主营业务</a>
                <ul class="businse_sel" <?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?><?php if ($_smarty_tpl->getVariable('whatid')->value==2){?>style="display:block;"<?php }?><?php }?>>
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('left_zhuying')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <li <?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?><?php if ($_smarty_tpl->getVariable('id')->value==$_smarty_tpl->getVariable('left_zhuying')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="background-color:#be980d;"<?php }?><?php }?>><a href="/business/business-list.php?whatid=<?php echo $_smarty_tpl->getVariable('left_zhuying')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['parent_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('left_zhuying')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" style="font-size:12px;color:#000;"><?php echo $_smarty_tpl->getVariable('left_zhuying')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
                <?php endfor; endif; ?>
                </ul>
            </li>
            <li <?php if ($_smarty_tpl->getVariable('whatid')->value=="3"){?>class="cmain_leftarea_icon tehh"<?php }else{ ?>class="tehh"<?php }?>><span></span><a href="javascript:void(0)">延伸业务</a>
                <ul class="businse_sel" <?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?><?php if ($_smarty_tpl->getVariable('whatid')->value==3){?>style="display:block;"<?php }?><?php }?>>
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('left_yanshen')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <li <?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?><?php if ($_smarty_tpl->getVariable('id')->value==$_smarty_tpl->getVariable('left_yanshen')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="background-color:#be980d;"<?php }?><?php }?>><a href="/business/stretch.php?whatid=<?php echo $_smarty_tpl->getVariable('left_yanshen')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['parent_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('left_yanshen')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" style="font-size:12px;color:#000;"><?php echo $_smarty_tpl->getVariable('left_yanshen')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
                <?php endfor; endif; ?>    
                </ul>
            </li>
        </ul>
    </div>
    
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="safety"){?>  
       <div class="cmain_leftarea">
        <h2><span>安全管理</span></h2>
        <ul>
 				<li <?php if ($_smarty_tpl->getVariable('whatid')->value=="2"){?>class="cmain_leftarea_icon tehh"<?php }else{ ?>class="tehh"<?php }?>><span></span><a href="/safety/safety-zhi.php?whatid=2"><?php echo $_smarty_tpl->getVariable('left_zhi')->value['name'];?>
</a></li>
 
            <li <?php if ($_smarty_tpl->getVariable('whatid')->value=="3"){?>class="cmain_leftarea_icon tehh"<?php }else{ ?>class="tehh"<?php }?>><span></span><a href="javascript:void(0)"><?php echo $_smarty_tpl->getVariable('left_bai')->value['name'];?>
</a>
                <ul class="businse_sel" <?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?><?php if ($_smarty_tpl->getVariable('whatid')->value==3){?>style="display:block;"<?php }?><?php }?>>
                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('sleft_bai')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <li <?php if ($_smarty_tpl->getVariable('whatid')->value=="3"){?><?php if ($_smarty_tpl->getVariable('id')->value==$_smarty_tpl->getVariable('sleft_bai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="background-color:#be980d;"<?php }?><?php }?>><a href="/safety/safety.php?whatid=<?php echo $_smarty_tpl->getVariable('sleft_bai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['parent_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('sleft_bai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" style="font-size:12px;color:#000;"><?php echo $_smarty_tpl->getVariable('sleft_bai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
               <?php endfor; endif; ?>
                </ul>
            </li>
            
     	  
        </ul>
    </div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="staff"){?>  
         <div class="cmain_leftarea">
        <h2><span>员工风采</span></h2>
        <ul>
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('top_staff')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <li <?php if ($_smarty_tpl->getVariable('whatid')->value==$_smarty_tpl->getVariable('top_staff')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span><a href="/staff/staff.php?whatid=<?php echo $_smarty_tpl->getVariable('top_staff')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('top_staff')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
        <?php endfor; endif; ?>   
        </ul>
    </div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="contact"){?>
    <div class="cmain_leftarea">
        <h2><span>联系我们</span></h2>
        <ul>
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('top_contact')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <li <?php if ($_smarty_tpl->getVariable('whatid')->value==$_smarty_tpl->getVariable('top_contact')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>class="cmain_leftarea_icon"<?php }else{ ?><?php }?>><span></span><a href="/contact/contact.php?whatid=<?php echo $_smarty_tpl->getVariable('top_contact')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('top_contact')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
        <?php endfor; endif; ?>       

        </ul>
    </div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="search"){?>
<div class="cmain_leftarea">
    <h2><span>联系我们</span></h2>
    <ul>
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('top_contact')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <li><span></span><a href="/contact/contact.php?whatid=<?php echo $_smarty_tpl->getVariable('top_contact')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('top_contact')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li>
        <?php endfor; endif; ?>

    </ul>
</div>
 <?php }?>
 