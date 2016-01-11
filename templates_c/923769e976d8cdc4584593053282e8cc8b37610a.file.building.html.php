<?php /* Smarty version Smarty-3.0.7, created on 2015-11-23 17:05:00
         compiled from "/var/www/virtual/jialongwy/home/wwwroot/templates/building.html" */ ?>
<?php /*%%SmartyHeaderCode:20181644515652d6bcd13040-15829290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '923769e976d8cdc4584593053282e8cc8b37610a' => 
    array (
      0 => '/var/www/virtual/jialongwy/home/wwwroot/templates/building.html',
      1 => 1448269483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20181644515652d6bcd13040-15829290',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/virtual/jialongwy/home/wwwroot/smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>党建工作</title>
    <?php $_template = new Smarty_Internal_Template('public/topjs.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    
</head>
<body>
 <?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<div class="cbanner">
    <img src="../images/building/buildingbanner.png">
</div>
<div class="cmain">
 <?php $_template = new Smarty_Internal_Template('public/left.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    
    <div class="cmain_rightarea">
           <?php $_template = new Smarty_Internal_Template('public/home.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            
            <div class="new_change">
                <div class="newlist_t">
                    <div class="building_list">
                        <ul>


                            <li <?php if ($_smarty_tpl->getVariable('ye')->value>=2){?>style="display:none;"<?php }?> class="building_list_1"><span class="building_date"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('tuijian')->value['time'],"%Y-%m-%d");?>
</span>
                                <div class="building_list_word">

                                    <img src="../<?php echo $_smarty_tpl->getVariable('tuijian')->value['image'];?>
" style="width:118px;height:66px;">
                                    <h2><a href="/building/building_xq.php?whatid=<?php echo $_smarty_tpl->getVariable('tuijian')->value['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('tuijian')->value['id'];?>
" style="color: #BE980D;"><?php echo $_smarty_tpl->getVariable('tuijian')->value['title'];?>
</a></h2>
                                    <p><?php echo mb_substr($_smarty_tpl->getVariable('tuijian')->value['description'],0,90,'utf-8');?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('tuijian')->value['description'])>90){?>...<?php }?></p>

                                </div>
                            </li>

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
                            <li><span class="building_date"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time'],"%Y-%m-%d");?>
</span>
                              <a href="/building/building_xq.php?whatid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_id'];?>
&whattid=<?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">  <?php echo $_smarty_tpl->getVariable('list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</a>
                            </li>
                            <?php endfor; endif; ?>
                          
                        </ul>
                    </div>
                    <div class="cmain_4_index">
              
    
                        <?php echo $_smarty_tpl->getVariable('pager')->value;?>

                    </div>
                </div>
              
            </div>
    </div>
</div>
< <?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
</body>
</html>