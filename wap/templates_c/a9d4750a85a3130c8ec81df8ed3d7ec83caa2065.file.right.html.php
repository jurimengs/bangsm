<?php /* Smarty version Smarty-3.0.7, created on 2016-01-07 13:24:35
         compiled from "F:/wamp/www//yanqi/templates\public/right.html" */ ?>
<?php /*%%SmartyHeaderCode:6902568e6713136591-08296692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9d4750a85a3130c8ec81df8ed3d7ec83caa2065' => 
    array (
      0 => 'F:/wamp/www//yanqi/templates\\public/right.html',
      1 => 1452133987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6902568e6713136591-08296692',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'F:\wamp\www\yanqi\smarty\plugins\modifier.date_format.php';
?><?php if ($_smarty_tpl->getVariable('yemianid')->value=='product'){?>
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
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='service'){?>
<div class="float">
    <div class="right-o">
        <dl>
            <dt><a>服务信息</a></dt>
            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('service')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <?php if ($_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==4){?>
            <dd>
                <a href="/huizhan/service/Assessment-<?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html" <?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->getVariable('association')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="color: #d92231;"<?php }else{ ?><?php }?>><?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
            </dd>
            <?php }elseif($_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==3){?>
            <dd>
                <a href="/huizhan/service/Certification-<?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html" <?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->getVariable('association')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="color: #d92231;"<?php }else{ ?><?php }?>><?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
            </dd>
            <?php }elseif($_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==2){?>
            <dd>
                <a href="/huizhan/service/Formembership-<?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html" <?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->getVariable('association')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="color: #d92231;"<?php }else{ ?><?php }?>><?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
            </dd>
            <?php }elseif($_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==5){?>
            <dd>
                <a href="/huizhan/service/Show-<?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html" <?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->getVariable('association')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="color: #d92231;"<?php }else{ ?><?php }?>><?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
            </dd>
            <?php }elseif($_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==6){?>
            <dd>
                <a href="/huizhan/service/Training-<?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html" <?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->getVariable('association')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="color: #d92231;"<?php }else{ ?><?php }?>><?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
            </dd>
            <?php }elseif($_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==7){?>
            <dd>
                <a href="/huizhan/service/Demand-<?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html" <?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->getVariable('association')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="color: #d92231;"<?php }else{ ?><?php }?>><?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
            </dd>
            <?php }elseif($_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']==8){?>
            <dd>
                <a href="/huizhan/service/Release-<?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html" <?php if ($_smarty_tpl->getVariable('tid')->value==$_smarty_tpl->getVariable('association')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']){?>style="color: #d92231;"<?php }else{ ?><?php }?>><?php echo $_smarty_tpl->getVariable('service')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a>
            </dd>
            <?php }?>

            <?php endfor; endif; ?>
        </dl>
    </div>
    <div class="right-t">
        <dl>
            <dt>中国社会组织5A级</dt>
            <dd>
                协会成立以来，本着遵守国家法律、法规，积极发挥“服务、代表、协调、自律”的四大职能，在市有关职能部门的指导下，协助政府从事行业管理，就保护会员的合法权益、提高行业整体素质、规范行业统计、加强行业自律机制</dd>
        </dl>
        <div class="more">
            <a href="/huizhan/association/About.html">点击了解更多</a></div>
    </div>
</div>
<div class="clear">
</div>
<?php }elseif($_smarty_tpl->getVariable('yemianid')->value=='search'){?>
<div class="float">
    <div class="right-o">

        <div class="y-wz">
            <div class="title">
                相关文章推荐</div>
            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('wenzhang')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = (int)2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
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
            <dl onclick="javascript:location.href='/huizhan/news/News-del-<?php echo $_smarty_tpl->getVariable('wenzhang')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.html';">
                <dt><?php echo $_smarty_tpl->getVariable('wenzhang')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</dt>
                <dd class="nyr">
                    <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('wenzhang')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time'],"%Y/%m/%d");?>

                </dd>
                <dd>
                    <?php echo mb_substr($_smarty_tpl->getVariable('wenzhang')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['description'],0,30,"utf-8");?>
<?php if (utf8_strlen($_smarty_tpl->getVariable('wenzhang')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['description'])>30){?>...<?php }?>
                </dd>
            </dl>
            <?php endfor; endif; ?>

            <div>
                <button class="more" onclick="javascript:location.href='/huizhan/news/News.html';">
                </button>
            </div>
        </div>
    </div>
    <div class="right-tr">
        <div class="title">邮件订阅</div>
        <div class="yw">SCEIA.COM.CN</div>
        <div>
            <input placeholder='邮件名称' class="yj" />
            <button class="btn-rt"></button>
        </div>
    </div>
</div>
<div class="clear">
</div>
<?php }?>