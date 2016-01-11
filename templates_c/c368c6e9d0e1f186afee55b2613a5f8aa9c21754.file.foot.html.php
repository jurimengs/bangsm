<?php /* Smarty version Smarty-3.0.7, created on 2015-10-02 10:38:48
         compiled from "G:/wamp/www//sqs/templates\public/foot.html" */ ?>
<?php /*%%SmartyHeaderCode:25989560e5eb8abb975-86926379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c368c6e9d0e1f186afee55b2613a5f8aa9c21754' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\public/foot.html',
      1 => 1443781449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25989560e5eb8abb975-86926379',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
    <a href="/sqs/<?php echo $_smarty_tpl->getVariable('navfoot')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
?id=<?php echo $_smarty_tpl->getVariable('navfoot')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->getVariable('navfoot')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>  <?php if ($_smarty_tpl->getVariable('navfoot')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']=='7'){?> <?php }else{ ?>| <?php }?> 
    <?php endfor; endif; ?>
    </p>
    <p>© 2008-2015 上海市浦东新区峨山路613号A楼711-712室<span class="media-tp">&nbsp&nbsp&nbsp 邮编:200127</span></p>
    <p>Email:Volunteer@hihcc.org     Powered by Alsovalue</p>
    </div>
     <div class="float">
     <div class="float footer-fx">分享</div>
     <div class="float footer-st"></div>
     <ul class="float"><li><img src="../images/footer-1.jpg" /></li><li><img src="../images/footer-2.jpg" /></li><li><img src="../images/footer-3.jpg" /></li><li><img src="../images/footer-4.jpg" /></li><li><img src="../images/footer-5.jpg" /></li></ul>
      <div class="clear"></div>
     </div>
      <div class="clear"></div>
    </div>
    </div>



