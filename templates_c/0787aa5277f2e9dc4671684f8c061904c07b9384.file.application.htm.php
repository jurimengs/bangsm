<?php /* Smarty version Smarty-3.0.7, created on 2015-10-08 01:56:20
         compiled from "G:/wamp/www//sqs/templates\application.htm" */ ?>
<?php /*%%SmartyHeaderCode:188075615cd44ad7aa5-92259370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0787aa5277f2e9dc4671684f8c061904c07b9384' => 
    array (
      0 => 'G:/wamp/www//sqs/templates\\application.htm',
      1 => 1444269377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188075615cd44ad7aa5-92259370',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
﻿<?php $_template = new Smarty_Internal_Template('public/top.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <!--tab-->

        <!--con-->
        <div class="con-warp">
            <div class="con">
                <div>
                    <img src="../images/jz-1.jpg" /></div>
                <div>
                    <div class="float">
                        <div class="con-left01">
                            <div class="con-left-zx">
                                <img src="../images/knowledge-zv.png" />申请/捐助<span class="con-left-news">NEWS</span></div>
                            <div class="con-left-lz ">
                                <a href="/sqs/jz/application.php">义工申请</a></div>
                            <div class="con-left-mt">
                                <a href="/sqs/jz/jz.php">捐助</a></div>
                        </div>
                        <div class="con-left02">
                            <div>
                              <a href="/sqs/about/contactus.php?id=3">
                                <div class="float con-left-lx s1">
                                    联系我们
                                 </div>
                            </a>
                           <a href="/sqs/jz/application.php">
                                <div class="float con-left-lx s2">
                                    义工申请
                                </div>
                            </a>
                                <div class="clear">
                                </div>
                            </div>
                            <div>
                              <a href="/sqs/jz/jz.php">
                                <div class="float con-left-lx s3">
                                    捐助
                                </div>
                            </a>
                             <a href="/sqs/hand/hand.php">
                                <div class="float con-left-lx s4">
                                    消息广告
                                </div>
                           </a>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                        <div class="application-left-me" ><div style="position:relative;"><img src="../images/me.jpg" /></div>
                        <div style="position:absolute; top:120px; left:20px; color:#fff; font-size:13px;">本期志愿者名额：<?php echo $_smarty_tpl->getVariable('renshu')->value['benqi'];?>
</div>
                        <div style="position:absolute; top:140px; left:20px; color:#fff; font-size:13px;">手牵手志愿者总数：<?php echo $_smarty_tpl->getVariable('renshu')->value['zong'];?>
</div>
                         <?php if ($_smarty_tpl->getVariable('num')->value>0&&$_smarty_tpl->getVariable('num')->value<10){?>
                        <div class="application-left-z"> 0 </div>
                        <div class="application-left-t">0</div>
                        <div class="application-left-r"><?php echo $_smarty_tpl->getVariable('num')->value;?>
</div>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('num')->value>9&&$_smarty_tpl->getVariable('num')->value<100){?>
                        <div class="application-left-z"> 0 </div>
                        <div class="application-left-t"><?php echo mb_substr($_smarty_tpl->getVariable('num')->value,0,1,'utf-8');?>
</div>
                        <div class="application-left-r"><?php echo mb_substr($_smarty_tpl->getVariable('num')->value,1,1,'utf-8');?>
</div>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('num')->value>99&&$_smarty_tpl->getVariable('num')->value<1000){?>
                        <div class="application-left-z"> <?php echo mb_substr($_smarty_tpl->getVariable('num')->value,0,1,'utf-8');?>
</div>
                        <div class="application-left-t"><?php echo mb_substr($_smarty_tpl->getVariable('num')->value,1,1,'utf-8');?>
</div>
                        <div class="application-left-r"><?php echo mb_substr($_smarty_tpl->getVariable('num')->value,2,1,'utf-8');?>
</div>
                        <?php }?>
                        
                        <div class="application-left-m">名</div>
                        </div> 
                    </div>
                    <div class="float">
                        <div class="application-warp">
                            <div class="con-right-wz">
                                您现在的位置：<a href="../index.php">首页 </a>> <a href="../jz/jz.php">申请/捐助</a>> 义工申请</div>
                            <div class="con-right-lz">
                                义工申请</div>
                                  <form action="?" method="post" name="ygform" class="ygform">
                            <div class="application-main hand4-top">
                                <div>
                                    <img src="../images/mihao2.jpg" />必填字段</div>
                                <div>
                                    <ul>
                                        <li>姓名<img src="../images/mihao2.jpg" />：<input class="application-input"  name="name" id="name"/></li>
                                        <li>出生日期：
	                                        <select id="year"  name="year" class="riqi_z"  style="margin-top:15px; margin-left:8px; width:60px; height:21px; text-align:center;">
	                                        				<option value=""></option >
	                                        </select><span id="nian1">年</span>
											<select id="month"  name="month" class="riqi_z" style="margin-top:15px; margin-left:4px; width:45px; height:21px; text-align:center;">
															<option value=""></option>
											</select><span id="yue1">月</span>
											<select id="day"  name="day" style="margin-top:15px; margin-left:4px; width:40px; height:21px; text-align:center;">
															<option value=""></option>
											</select><span id="ri1">日</span>
                                        </li>
                                        <li>政治面貌：
                                       		 <input class="application-input2"  name="face"/>
                                        </li>
                                        <li>身份证<img src="../images/mihao2.jpg" />：
                                      		 <input class="application-input3" name="card" />
                                        </li>
                                        <li>邮编：
                                      		  <input class="application-input" name="code"/>
                                        </li>
                                        <li>工作：
                                        		<select class="application-select2" name="work">
                                        			<option value="">请选择</option>
                                        			<option value="厨师">厨师</option>
                                        			<option value="IT">IT</option>
                                        			<option value="白领">白领</option>
                                        			<option value="文员">文员</option>
                                        			<option value="其他">其他</option>
                                        		</select>
                                        </li>
                                        <li>职务：
                                      		  <input class="application-input" name="position"/>
                                        </li>
                                        <li>工作地址：
                                        		<input class="application-input2"  name="workaddress"/>
                                        </li>
                                    </ul>
                                    <ul style="margin:15px">
                                    <li>性别：&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp
                                    		<input name="gender" type="radio" value="男" checked="checked"/> 男&nbsp &nbsp
                                    		<input name="gender" type="radio" value="女" /> 女
                                    </li>
                                    <li>民族：
                                  		  <input class="application-input"  name="national"/>
                                    </li>
                                    <li>宗教：
                                    		<select class="application-select2" name="religious">
                                    						<option value="">请选择</option>
                                    						<option value="基督教">基督教</option>
                                    						<option value="伊斯兰教">伊斯兰教</option>
                                    						<option value="佛教">佛教</option>
                                    						 
                                    		</select>
                                    </li>
                                    <li>家庭住址：
                                   		 <input class="application-input2"  name="familyaddress"/>
                                    </li>
                                    <li>手机<img src="../images/mihao2.jpg" />：
                                  		  <input class="application-input4"  name="shouji"/>
                                    </li>
                                     <li>单位：
                                    		 <input class="application-input"  name="company"/>
                                     </li>
                                      <li>资格证书：
                                    		  <select class="application-select1" name="certificate">
                                    					  <option value="">请选择</option>
                                    		  			<option value="上海救援组织资格证书">上海救援组织资格证书</option>
                                    		  			<option value="国家贫困救济资格证书">国家贫困救济资格证书</option>
                                    		  </select>
                                  	 </li>
                                     <li>邮箱<img src="../images/mihao2.jpg" />：
                                    		 <input class="application-input4"  name="email" />
                                     </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <div>
                                <div>您愿意投入的服务时间长度是</div>
                                <div class="application-time">
                                		<input name="servicetime" type="radio" value="6个月"  checked="checked"/> 6个月&nbsp &nbsp<input name="servicetime" type="radio" value="一年" /> 一年
                                </div>
                                <div class="hand4-top">您愿意就任的服务岗位是</div>
                                <div class="application-gw">
                                <ul>
                                <li><input checked="checked" name="jobs" type="radio" value="组长（与医院沟通和协调、整理服务内容、召集组员）" />&nbsp 组长（与医院沟通和协调、整理服务内容、召集组员）</li>
                                <li><input name="jobs" type="radio" value="组员（基础服务、信息汇报）" />&nbsp 组员（基础服务、信息汇报）</li>
                                <li><input name="jobs" type="radio" value="活动主持人 （组织活动并主持）" />&nbsp 活动主持人 （组织活动并主持）</li>
                                <li><input name="jobs" type="radio" value="传播策划员 （协助机构传播与策划志愿服务内容）" />&nbsp 传播策划员 （协助机构传播与策划志愿服务内容）</li>
                                <li><input name="jobs" type="radio" value="新媒体维护员 （协助机构维护网站、微博、微信等网络信息渠道）" />&nbsp 新媒体维护员 （协助机构维护网站、微博、微信等网络信息渠道）</li>
                                <li>&nbsp &nbsp 【以上岗位均会参与到一线志愿服务中】</li>
                                </ul>
                                </div>
                                <div class="hand4-top">您想参与哪个医院的志愿服务？</div>
                                <div><select class="application-select3" name="hospital">
                             					   <option value="">请选择</option>
                                					<option value="儿童医院">儿童医院</option>
                                					<option value="红十字会医院">红十字会医院</option>
                                					<option value="上海交通医院">上海交通医院</option>
                                        </select></div>
                                <div class="hand4-top">您想参与哪个项目的志愿服务？</div>
                                <div class="application-xm">
                                <ul>
                                <li><input checked="checked" name="service" type="radio" value=" 医院" />&nbsp 医院</li>
                                <li><input name="service" type="radio" value="舒缓病房（病区）" />&nbsp 舒缓病房（病区）</li>
                                <li><input name="service" type="radio" value="老年日托" />&nbsp 老年日托</li>
                                <li><input name="service" type="radio" value="社区" />&nbsp 社区</li>
                                <li><input name="service" type="radio" value="其他"  class="check"/>&nbsp 其他</li>
                                </ul>
                                </div>
                                <div class="application-sm">郑重声明：保证所填写资料属实，绝无虚假内容。</div>
                                <div>
                             <input type="submit" value="提交" class="application-but-tj"/>
                    		<input class="application-but-cx" type="reset" value="重新输入"/>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        
   <?php $_template = new Smarty_Internal_Template('public/foot.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    
    </div>

    <script type="text/javascript">
var demo = $(".ygform").Validform({
    btnSubmit: "#btn_sub",
    btnReset: ".btn_reset",
    tiptype: 3,
    label: ".label",
    showAllError: false,
    ajaxPost: true,
    callback: function(data) {
        if (data.status == 1) {
            alert(data.info);
            window.location.href = '?';
        }
        else{
            alert(data.info);
        }
    },
    tiptype:function(msg,o,cssctl){

    }
});
</script>
</body>
</html>
