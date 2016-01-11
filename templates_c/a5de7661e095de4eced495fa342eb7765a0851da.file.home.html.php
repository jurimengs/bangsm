<?php /* Smarty version Smarty-3.0.7, created on 2015-10-29 02:42:44
         compiled from "G:/wamp/www//jl/templates\public/home.html" */ ?>
<?php /*%%SmartyHeaderCode:31698563187a47f30c9-34847550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5de7661e095de4eced495fa342eb7765a0851da' => 
    array (
      0 => 'G:/wamp/www//jl/templates\\public/home.html',
      1 => 1446086510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31698563187a47f30c9-34847550',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('yemianid')->value=='conmpany'){?>
<div class="cmain_rightarea_title">
            <h3><span></span>公司简介</h3>
            <div class="cmain_rightarea_title_word">您的位置：首页 > 走进嘉隆 ><?php if ($_smarty_tpl->getVariable('yemianid2')->value=='conm'){?>公司简介<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='struct'){?>组织架构<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='history'){?> 发展历程<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='honor'){?>公司荣誉<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='porfit'){?>社会公益<?php }?></div>
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='culture'){?>   
<div class="cmain_rightarea_title">
                <h3><span></span>经营理念</h3>
                <div class="cmain_rightarea_title_word">您的位置：首页 > 企业文化 > <?php if ($_smarty_tpl->getVariable('yemianid2')->value=='linian'){?>经营理念<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='nk'){?>企业内刊<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='tu'){?>图片专栏<?php }elseif($_smarty_tpl->getVariable('yemianid2')->value=='video'){?>视频中心<?php }?></div>
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
                <div class="cmain_rightarea_title_word">您的位置：首页 > 新闻中心 > <?php echo $_smarty_tpl->getVariable('top_news')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</div>
                <?php }?>
                <?php endfor; endif; ?>
                <?php }else{ ?>
                <h3><span></span>公司要闻</h3>
                <div class="cmain_rightarea_title_word">您的位置：首页 > 新闻中心 > 公司要闻</div>
         		<?php }?>
                 
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="building"){?>  
 <div class="cmain_rightarea_title">
 	
 		<?php if (!empty($_smarty_tpl->getVariable('whatid',null,true,false)->value)){?>
 		 <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('top_duilding')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	 		<?php if ($_smarty_tpl->getVariable('whatid')->value==$_smarty_tpl->getVariable('top_duilding')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>
	                <h3><span></span> <?php echo $_smarty_tpl->getVariable('top_duilding')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</h3>
	                <div class="cmain_rightarea_title_word">您的位置：首页 > 党建工作 >  <?php echo $_smarty_tpl->getVariable('top_duilding')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</div>
	         <?php }?>
          <?php endfor; endif; ?>    
          <?php }else{ ?>
                <h3><span></span>党建园地</h3>
                <div class="cmain_rightarea_title_word">您的位置：首页 > 新闻中心 > 党建园地</div>
           <?php }?>      
         
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="business"){?>  
<div class="cmain_rightarea_title">
				<?php if (isset($_smarty_tpl->getVariable('yemianid2',null,true,false)->value)){?>
					<h3><span></span><?php if (!empty($_smarty_tpl->getVariable('type_name',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('type_name')->value['name'];?>
<?php }else{ ?>延伸业务<?php }?></h3>
                    <div class="cmain_rightarea_title_word">您的位置：首页 > 业务介绍 > 延伸业务<?php if (!empty($_smarty_tpl->getVariable('type_name',null,true,false)->value)){?>><?php echo $_smarty_tpl->getVariable('type_name')->value['name'];?>
<?php }?></div>
				<?php }else{ ?>
                    <h3><span></span><?php if (!empty($_smarty_tpl->getVariable('type_name',null,true,false)->value)){?><?php echo $_smarty_tpl->getVariable('type_name')->value['name'];?>
<?php }else{ ?>主营业务<?php }?></h3>
                    <div class="cmain_rightarea_title_word">您的位置：首页 > 业务介绍 > 主营业务<?php if (!empty($_smarty_tpl->getVariable('type_name',null,true,false)->value)){?>><?php echo $_smarty_tpl->getVariable('type_name')->value['name'];?>
<?php }?></div>
                 <?php }?>   
</div>
 <?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="safety"){?>  
<div class="cmain_rightarea_title">
						<?php if ($_smarty_tpl->getVariable('whatid')->value=="2"){?>
                        <h3><span></span>职能介绍</h3>
                        <div class="cmain_rightarea_title_word">您的位置：首页 > 安全管理 > 职能介绍</div>
                        <?php }else{ ?>
                        <h3><span></span>安全百科</h3>
                        <div class="cmain_rightarea_title_word">您的位置：首页 > 安全管理 > 安全百科 </div>
                        <?php }?>
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="staff"){?> 
  <div class="cmain_rightarea_title">  						
                        <h3><span></span><?php echo $_smarty_tpl->getVariable('staff_name')->value['name'];?>
</h3>
                        <div class="cmain_rightarea_title_word">您的位置：首页 > 员工风采 > <?php echo $_smarty_tpl->getVariable('staff_name')->value['name'];?>
</div>
 </div> 
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=="contact"){?>
<div class="cmain_rightarea_title">
                <h3><span></span>联系方式</h3>
                <div class="cmain_rightarea_title_word">您的位置：首页 > 联系我们 > 联系方式</div>
</div>
<?php }?>