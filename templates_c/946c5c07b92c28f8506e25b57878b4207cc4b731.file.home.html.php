<?php /* Smarty version Smarty-3.0.7, created on 2015-11-26 15:30:50
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/public/home.html" */ ?>
<?php /*%%SmartyHeaderCode:12575881535656b52a95ece0-95525587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '946c5c07b92c28f8506e25b57878b4207cc4b731' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/public/home.html',
      1 => 1448523049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12575881535656b52a95ece0-95525587',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('yemianid')->value=='conmpany'){?>
<div class="cmain_rightarea_title">
            <h3><span></span><?php if ($_smarty_tpl->getVariable('yemianid2')->value=='conm'){?>公司简介<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='struct'){?>组织架构<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='history'){?> 发展历程<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='honor'){?>公司荣誉<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='porfit'){?>社会公益<?php }?></h3>
            <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a>> <a href="/conmpany/conmpany.php">走进嘉隆</a> ><?php if ($_smarty_tpl->getVariable('yemianid2')->value=='conm'){?>公司简介<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='struct'){?>组织架构<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='history'){?> 发展历程<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='honor'){?><a href="/conmpany/conmpany_honor.php">公司荣誉</a><?php if (!empty($_smarty_tpl->getVariable('tid',null,true,false)->value)){?><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?><?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->getVariable('left_conmpany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?> > <?php echo $_smarty_tpl->getVariable('left_conmpany')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
<?php }?><?php endfor; endif; ?><?php }?><?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='porfit'){?>社会公益<?php }?></div>
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='culture'){?>   
<div class="cmain_rightarea_title">
                <h3><span></span> <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='linian'){?>经营理念<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='nk'){?>企业内刊<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='tu'){?>图片专栏<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='video'){?>视频中心<?php }?></h3>
                <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a> > <a href="/culture/culture.php">企业文化</a> > <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='linian'){?>经营理念<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='nk'){?>企业内刊<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='tu'){?>图片专栏<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='video'){?>视频中心<?php }?></div>
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="news"){?>      
 <div class="cmain_rightarea_title">

 				
                <?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?>
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
                 <?php if ($_smarty_tpl->getVariable('whatid')->value==$_smarty_tpl->getVariable('top_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>
                <h3><span></span><?php echo $_smarty_tpl->getVariable('top_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</h3>
                <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a> > <a href="/news/news.php">新闻中心</a> > <a href="/news/news.php?whatid=<?php echo $_smarty_tpl->getVariable('top_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('top_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></div>
                <?php }?>
                <?php endfor; endif; ?>
                <?php }else{ ?>
                <h3><span></span>新闻中心</h3>
                <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a> > <a href="/news/news.php">新闻中心</a></div>
         		<?php }?>
                 
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="building"){?>  
 <div class="cmain_rightarea_title">
 	
 		<?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?>
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
	 		<?php if ($_smarty_tpl->getVariable('whatid')->value==$_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>
	                <h3><span></span> <?php echo $_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</h3>
	                <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a> > <a href="/building/building.php">党建工作</a>  > <a href="/building/building.php?whatid=<?php echo $_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a><?php if (isset($_smarty_tpl->getVariable('id',null,true,false)->value)){?><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
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
?><?php if ($_smarty_tpl->getVariable('id')->value==$_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['id']){?>><?php echo $_smarty_tpl->getVariable('left_building')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sleft_building'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'];?>
<?php }?><?php endfor; endif; ?><?php }?></div>
	         <?php }?>
          <?php endfor; endif; ?>    
          <?php }else{ ?>
                <h3><span></span>党建工作</h3>
                <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a> > <a href="/building/building.php">党建工作</a></div>
           <?php }?>      
         
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="business"){?>  
<div class="cmain_rightarea_title">
				<?php if (isset($_smarty_tpl->getVariable('yemianid2',null,true,false)->value)){?>
					<h3><span></span><?php if (!empty($_smarty_tpl->getVariable('type_name',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('type_name')->value['name'];?>
<?php }else{ ?>延伸业务<?php }?></h3>
                    <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a> > <a href="/business/business.php">介绍业务</a> > 延伸业务<?php if (!empty($_smarty_tpl->getVariable('type_name',null,true,false)->value)){?>><?php echo $_smarty_tpl->getVariable('type_name')->value['name'];?>
<?php }?></div>
				<?php }else{ ?>
                    <h3><span></span><?php if (!empty($_smarty_tpl->getVariable('whatidname',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('whatidname')->value['name'];?>
<?php }else{ ?>主营业务<?php }?></h3>
                    <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a> > <a href="/business/business.php">介绍业务</a> > <a href="/business/business.php">主营业务</a><?php if (!empty($_smarty_tpl->getVariable('whatidname',null,true,false)->value)){?>><a href="/business/business-list.php?whatid=<?php echo $_smarty_tpl->getVariable('whatidname')->value['parent_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('whatidname')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('whatidname')->value['name'];?>
</a><?php }?><?php if (isset($_smarty_tpl->getVariable('id2',null,true,false)->value)){?>  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?><?php if ($_smarty_tpl->getVariable('id2')->value==$_smarty_tpl->getVariable('left_zhuying')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>><?php echo $_smarty_tpl->getVariable('left_zhuying')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
<?php }?><?php endfor; endif; ?><?php }?></div>
                 <?php }?>   
</div>
 <?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="safety"){?>  
<div class="cmain_rightarea_title">
						<?php if ($_smarty_tpl->getVariable('whatid')->value=="2"){?>
                        <h3><span></span>职能介绍</h3>
                        <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a>> <a href="/safety/safety.php">安全管理</a> > 职能介绍</div>
                        <?php }else{ ?>
                        <h3><span></span><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?><?php if (!empty($_smarty_tpl->getVariable('id',null,true,false)->value)){?><?php if ($_smarty_tpl->getVariable('id')->value==$_smarty_tpl->getVariable('sleft_bai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?><?php echo $_smarty_tpl->getVariable('sleft_bai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
<?php }?><?php }?> <?php endfor; endif; ?>   </h3>
                        <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a> > <a href="/safety/safety.php">安全管理</a><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?><?php if (!empty($_smarty_tpl->getVariable('id',null,true,false)->value)){?><?php if ($_smarty_tpl->getVariable('id')->value==$_smarty_tpl->getVariable('sleft_bai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>> <a href="/safety/safety.php?whatid=<?php echo $_smarty_tpl->getVariable('sleft_bai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['parent_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('sleft_bai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('sleft_bai')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a><?php }?><?php }?> <?php endfor; endif; ?> </div>
                        <?php }?>
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="staff"){?> 
  <div class="cmain_rightarea_title">  						
                        <h3><span></span><?php echo $_smarty_tpl->getVariable('staff_name')->value['name'];?>
</h3>
                        <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a> > <a href="/staff/staff.php">员工风采</a><?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?> > <?php echo $_smarty_tpl->getVariable('staff_name')->value['name'];?>
<?php }?></div>
 </div> 
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="contact"){?>
<div class="cmain_rightarea_title">
                <h3><span></span><?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?> <?php if ($_smarty_tpl->getVariable('whatid')->value==$_smarty_tpl->getVariable('top_contact')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?><?php echo $_smarty_tpl->getVariable('top_contact')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
<?php }?> <?php endfor; endif; ?><?php }else{ ?>联系方式<?php }?></h3>
                <div class="cmain_rightarea_title_word">您的位置：<a href="/index.php">首页 </a>> <a href="/contact/contact.php">联系我们</a><?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?> <?php if ($_smarty_tpl->getVariable('whatid')->value==$_smarty_tpl->getVariable('top_contact')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?> > <?php echo $_smarty_tpl->getVariable('top_contact')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
<?php }?> <?php endfor; endif; ?><?php }else{ ?> > 联系方式<?php }?></div>
</div>
<?php }?>