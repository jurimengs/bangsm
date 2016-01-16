<?php /* Smarty version Smarty-3.0.7, created on 2016-01-08 06:32:00
         compiled from "E:/wamp/www//yanqi/templates\public/right.html" */ ?>
<?php /*%%SmartyHeaderCode:5845568f57e0ee7c14-06092432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf62b6da3aff1ecf417cd30a6ca5a6976a0c73c' => 
    array (
      0 => 'E:/wamp/www//yanqi/templates\\public/right.html',
      1 => 1452234720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5845568f57e0ee7c14-06092432',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('yemianid')->value=='product'){?>
<div class="pro-right">
    <div class="one">
        <h2><?php echo $_smarty_tpl->getVariable('product_t')->value['name'];?>
</h2>
        <div class="pro-menu"><!--1分类-->
            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('product')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['i']['last']=='true'){?>

            <?php if ($_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==3){?>
            <h3><img src="../images/menu.jpg" style="vertical-align: middle;"> <a><?php echo $_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></h3>
            <ul><!--2类别-->
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['par']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['parent_id']==$_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>
                <li class="title-two"><a href="/yanqi/product/Product-List-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html#pos"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
                <?php }?>
                <?php }} ?>
            </ul>
             <?php }else{ ?>
                <h3><img src="../images/menu.jpg" style="vertical-align: middle;"> <a><?php echo $_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></h3>
                <ul><!--2类别-->
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['par']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['parent_id']==$_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>
                    <li class="title-two"><a><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
                    <li class="title-thr"style=" display: none;" >
                        <ul>  <!--3系列-->
                            <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['parx']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
?>
                              <?php if ($_smarty_tpl->tpl_vars['j']->value['parent_id']==$_smarty_tpl->tpl_vars['v']->value['id']){?>
                                <li><a href="/yanqi/product/Product-List-<?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
.html#pos"><?php echo $_smarty_tpl->tpl_vars['j']->value['name'];?>
</a></li>
                              <?php }?>
                            <?php }} ?>
                        </ul>
                    </li>
                    <?php }?>
                    <?php }} ?>
                </ul>
             <?php }?>
            <?php }else{ ?>
            <h3><img src="../images/menu.jpg" style="vertical-align: middle;"><a href=""> <?php echo $_smarty_tpl->getVariable('product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></h3>
            <?php }?>
            <?php endfor; endif; ?>
        </div>
    </div>
    <div class="service-right-two">
        <h3>下载中心</h3>
        <div><img src="../images/down.jpg"></div>
    </div>
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='plan'){?>
<div class="about-right">
    <div class="about-right-one">
        <dl>
            <dt><a><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('plan')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?><?php if ($_smarty_tpl->getVariable('plan')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==$_smarty_tpl->getVariable('xiangqing')->value['type_id']){?><?php echo $_smarty_tpl->getVariable('plan')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
<?php }?><?php endfor; endif; ?></a></dt>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rirht')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
            <dd <?php if ($_smarty_tpl->getVariable('id')->value==$_smarty_tpl->tpl_vars['v']->value['id']){?>style="color: #ee1921;"<?php }?>>
                <a href="/yanqi/plan/Plan-Details-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
            </dd>
            <?php }} ?>
        </dl>

        <dl>
            <dt>相关案例推荐</dt>

            <dd style="color: #ee1921;">
                上海市智能楼宇虹口区物业改造
                工程完成
            </dd>
            <dd>2015/11/14</dd>
            <dd class="al">服务所需的X86架构计岩齐致力于研究视频数据的储、运算、服务所需的X86架构计岩齐致力视频聘请了市有关委</dd>
        </dl>
        <dl>
            <dt>北京养老运维系统</dt>
            <dd style="color: #ee1921;">上海市智能楼宇虹口区物业改造
                工程完成</dd>
            <dd>2015/11/14</dd>
            <dd class="al">岩齐致力于研究视频数据的储、运算、服务所需的X86架构计岩齐致力于研究视频数据的储、运算、服务所6架于研究视频</dd>
        </dl>
        <button class="learn-more"></button>
    </div>
    <div class="service-right-two">
        <h3>下载中心</h3>
        <div><img src="../images/down.jpg"></div>
    </div>
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='server'){?>
<div class="service-right">
    <div class="service-right-one">
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('server')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <dl>
            <dt><a><?php echo $_smarty_tpl->getVariable('server')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></dt>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('server')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['par']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['type_id']==$_smarty_tpl->getVariable('server')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>
            <dd><a  <?php if ($_smarty_tpl->getVariable('xiangqing')->value['id']==$_smarty_tpl->tpl_vars['v']->value['id']){?>style=" color: #ee1921;"<?php }?> href="/yanqi/server/Server-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></dd>
            <?php }?>
            <?php }} ?>
        </dl>
        <?php endfor; endif; ?>



    </div>
    <div class="service-right-two">
        <h3>下载中心</h3>
        <div><img src="../images/down.jpg"></div>
    </div>
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='technology'){?>

<div class="about-right">
    <div class="about-right-one">
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('technology')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <dl>
            <dt><a><?php echo $_smarty_tpl->getVariable('technology')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></dt>

            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('technology')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['par']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
?>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['parent_id']==$_smarty_tpl->getVariable('technology')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['parent_id']==2){?>
                <dd><a <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('tid')->value){?> style="color: #ee1921;"<?php }?> href="/yanqi/technology/Download-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></dd>
                <?php }else{ ?>
                <dd><a  <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('tid')->value){?> style="color: #ee1921;"<?php }?> href="/yanqi/technology/Knowledge-<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></dd>
                <?php }?>
            <?php }?>
            <?php }} ?>

        </dl>
        <?php endfor; endif; ?>
    </div>
</div>


<?php }?>