function clearNoNum(obj)
{
//先把非数字的都替换掉，除了数字和.
obj.value = obj.value.replace(/[^\d.]/g,"");
//必须保证第一个为数字而不是.
obj.value = obj.value.replace(/^\./g,"");
//保证只有出现一个.而没有多个.
obj.value = obj.value.replace(/\.{2,}/g,".");
//保证.只出现一次，而不能出现两次以上
obj.value = obj.value.replace(".","$#$").replace(/\./g,"").replace("$#$",".");
}

/**/
var imgPlus = new Image();
imgPlus.src = "images/menu_plus.gif";

var Browser = new Object();

Browser.isMozilla = (typeof document.implementation != 'undefined') && (typeof document.implementation.createDocument != 'undefined') && (typeof HTMLDocument != 'undefined');
Browser.isIE = window.ActiveXObject ? true : false;
Browser.isFirefox = (navigator.userAgent.toLowerCase().indexOf("firefox") != - 1);
Browser.isSafari = (navigator.userAgent.toLowerCase().indexOf("safari") != - 1);
Browser.isOpera = (navigator.userAgent.toLowerCase().indexOf("opera") != - 1);
 
/**
 * 折叠分类列表
 */
function rowClicked(obj)
{
  // 当前图像
  img = obj;
  // 取得上二级tr>td>img对象
  obj = obj.parentNode.parentNode;
  // 整个分类列表表格
  var tbl = document.getElementById("list-table");
  // 当前分类级别
  var lvl = parseInt(obj.className);
  // 是否找到元素
  var fnd = false;
  var sub_display = img.src.indexOf('menu_minus.gif') > 0 ? 'none' : (Browser.isIE) ? 'block' : 'table-row' ;
  // 遍历所有的分类
  for (i = 0; i < tbl.rows.length; i++)
  {
      var row = tbl.rows[i];
      if (row == obj)
      {
          // 找到当前行
          fnd = true;
          //document.getElementById('result').innerHTML += 'Find row at ' + i +"<br/>";
      }
      else
      {
          if (fnd == true)
          {
              var cur = parseInt(row.className);
              var icon = 'icon_' + row.id;
              if (cur > lvl)
              {
                  row.style.display = sub_display;
				  				 
                  if (sub_display != 'none')
                  {
                      var iconimg = document.getElementById(icon);
                      iconimg.src = iconimg.src.replace('plus.gif', 'minus.gif');
                  }
              }
              else
              {
                  fnd = false;
                  break;
              }
          }
      }
  }
 
  for (i = 0; i < obj.cells[0].childNodes.length; i++)
  {
      var imgObj = obj.cells[0].childNodes[i];
      if (imgObj.tagName == "IMG" && imgObj.src != 'images/menu_arrow.gif')
      {
          imgObj.src = (imgObj.src == imgPlus.src) ? 'images/menu_minus.gif' : imgPlus.src;
      }
  }
}
//表单效果
$(function(){
	//
	$("input[type='text'],[type='password'],textarea").each(function(){
		$(this).attr("class","input");//给所有的加样式
		$(this).focus(function(){$(this).attr("class","inputhover");})
		$(this).blur(function(){$(this).attr("class","input");})
		
	})
	/*$("input[type='text'][name='p']").each(function(){
		$(this).attr("class","page");//给所有的加样式
		$(this).focus(function(){$(this).attr("class","pagehover");})
		$(this).blur(function(){$(this).attr("class","page");})
		
	})*/
	/*$("input[type='button']").each(function(){
		$(this).hover(
			function(){
				$(this).attr("class","btnhover");	
			},function(){
				$(this).attr("class","btn");	
			}
		)										
	})*/
	
	$("#btnBack").click(function(){history.back();})
})

//传参跳转
function ext(url){
	window.location.href=url;
}

//删除按钮
function listDelete(objForm){
		var isbool = false;
		$('.list tbody tr').find('input[type="checkbox"]').each(function(){
			if($(this).attr("checked")){
				isbool = true;
			}
		})
		if(isbool){
			if(confirm("你确定要删除它们吗，删除后将不可恢复?")){
				document.forms[objForm].submit();
				$("#del").attr("disabled","disabled");
				return true;
			}
			return false;

		}else{
			alert("你要删除哪条信息呢?");
		}
		return false;
}

function listsc(objForm){
    var isbool = false;
    $('.list tbody tr').find('input[type="checkbox"]').each(function(){
        if($(this).attr("checked")){
            isbool = true;
        }
    })
    if(isbool){
        if(confirm("你确定要删除它们么?")){
            $("#yincang").val("1");
            document.forms[objForm].submit();
            $("#del").attr("disabled","disabled");

            return true;
        }
        return false;

    }else{
        alert("你要删除哪条信息呢?");
    }
    return false;
}

function listtj(objForm){
    var isbool = false;
    $('.list tbody tr').find('input[type="checkbox"]').each(function(){
        if($(this).attr("checked")){
            isbool = true;
        }
    })
    if(isbool){
        if(confirm("你确定要推荐它们么?")){
            $("#yincang").val("2");
            document.forms[objForm].submit();
            $("#del").attr("disabled","disabled");

            return true;
        }
        return false;

    }else{
        alert("你要删除哪条信息呢?");
    }
    return false;
}



function listqxtj(objForm){
    var isbool = false;
    $('.list tbody tr').find('input[type="checkbox"]').each(function(){
        if($(this).attr("checked")){
            isbool = true;
        }
    })
    if(isbool){
        if(confirm("你确定要取消推荐么?")){
            $("#yincang").val("3");
            document.forms[objForm].submit();
            $("#del").attr("disabled","disabled");

            return true;
        }
        return false;

    }else{
        alert("你要取消推荐哪条信息呢?");
    }
    return false;
}








//光棒
$(document).ready(function(){
	 $('.list tbody tr:even').addClass('odd');
	 $('.list tbody tr').hover(
	  function() {$(this).addClass('highlight');},
	  function() {$(this).removeClass('highlight');}
	 );
	 // 如果复选框默认情况下是选择的，变色.
	 $('.list input[type="checkbox"]:checked').parents('tr').addClass('selected');
	 // 复选框
	 $('.list tbody tr td input[type="checkbox"]').click(
	  function() {
	   if (!$(this).hasClass('oper')) {
	    if ($(this).parents('tr').hasClass('selected')) {
	     $(this).parents('tr').removeClass('selected');
	     $(this).parents('tr').find('input[type="checkbox"]').removeAttr('checked');
	    } else {
	     $(this).parents('tr').addClass('selected');
	     $(this).parents('tr').find('input[type="checkbox"][disabled="false"]').attr('checked','checked');
	    }
	   }
	  }
	 );
	});


$(function(){
	//全选/不选
	$("#all").click(function(){
	  $('.list tbody tr').each( function() {
		if($("#all").attr("checked") ){
			$(this).addClass('selected');
			$(this).find('input[type="checkbox"][disabled="false"]').attr('checked','checked');
		}else{
			$(this).removeClass('selected');
			$(this).find('input[type="checkbox"][disabled="false"]').removeAttr('checked','checked');
		}
	   }
	  )
	})	
	
	//不选
	$("#reall").click(function(){
	$('.list tbody tr').each(
	   function() {
	        $(this).removeClass('selected');
	        $(this).find('input[type="checkbox"]').removeAttr('checked');
	   }
	  );
	})
})

	function checkAllRemove(){
	//if ($("#checkedAll").attr("checked") == false) { // 取消全选 
	  $('.list tbody tr').each(
	   function() {
	        $(this).removeClass('selected');
	        $(this).find('input[type="checkbox"]').removeAttr('checked');
	   }
	  );
	// }
	}
	function checkAllRev(){
	if ($("#id").attr("checked") == false) { // 反选 
	  $('.list tbody tr').each(
	   function() {
	            $(this).addClass('selected');
	            $(this).find('input[type="checkbox"]').attr('checked','checked');
	     }
	  );
	}else{
	    $('.list tbody tr').each(
	      function(){
	            $(this).removeClass('selected');
	            $(this).find('input[type="checkbox"]').removeAttr('checked');
	       }
	      );
	    }
	}
	
// 选项卡
$(function(){
	$(".tab dl dt>a:first").addClass("tabActive");
	$(".tab dl dd ul").not(":first").hide();
	$(".tab dl dt>a").unbind("click").bind("click", function(){
		$(this).siblings("a").removeClass("tabActive").end().addClass("tabActive");
		var index = $(".tab dl dt>a").index( $(this) );
		$(".tab dl dd ul").eq(index).siblings(".tab dl dd ul").hide().end().show();
   });
});

function deleteimg(obj)
{
    var strs = new Array();
    var shuju=$(obj).attr('src');
    $(obj).css("display","none");
    shuju=shuju.substr(3,shuju.length);
    //alert(shuju);
    var shuju2=$("#pimage").val();//删除,号用
    var zzz=shuju2.substr(shuju2.length-1,shuju2.length);
    if(zzz==",")
    {
        $("#pimage").val(shuju2.substr(0,shuju2.length-1));
    }
    //if()
    //{
    //  alert(1);
    //var qq=$("#pimage").val().substr();
    //}
    //alert(($("#pimage").val()).substr(0,($("#pimage").val()).length-1));
    //var aa=($("#pimage").val()).substr(0,($("#pimage").val()).length-1);
    var aa=$("#pimage").val();
    strs=aa.split(",");
    //alert(strs[0]);
    //alert($(obj).attr('src'));
    var strzz="";
    for(var i=0;i<strs.length;i++)
    {
        if(shuju!=strs[i])
        {
            strzz=strzz+strs[i]+",";
        }

    }
    strzz=strzz.substr(0,(strzz.length-1));
    $("#pimage").val(strzz);
}


$(function() {
    $('#pimage_upload').uploadify({
        'uploader'  : 'jquery/uploadify/uploadify.swf',
        'script'    : 'jquery/uploadify/uploadify.php',
        'folder'	  : '../uploads/product/',
        'cancelImg' : 'jquery/uploadify/cancel.png',
        'removeCompleted' : true,
        'auto':true,
        'buttonText': 'SELECT IMAGE',
        'fileExt'     : '*.jpg; *.gif; *.png',
        'fileDesc'    : 'Select Files *.jpg; *.gif; *.png',
        'multi':true,//多文件上传
        'onCancel'    : function(event,ID,fileObj,data) {
            $("#btnSubmit").attr("disabled",false);
        },
        'onSelect':function(event,ID,fileObj) {
            $("#btnSubmit").attr("disabled",true);
        },
        'onComplete' :function(event,queueID,fileObj,response,data){
            $("#pimage").val($("#pimage").val()+response+",");
            //$("#simage").val(response);
            //$("#spic").attr("src",'../'+response);
            //alert("s"+response+"s");
            $("#piliangxianshi").append("<img src=\"../"+response+"\" height=\"38\" style=\"margin-top:8px;\" onclick=\"deleteimg(this)\" />");
            $("#btnSubmit").attr("disabled",false);

        }

    });
    $('#ziliao_upload').uploadify({
        'uploader'  : 'jquery/uploadify/uploadify.swf',
        'script'    : 'jquery/uploadify/uploadify.php',
        'folder'	  : '../uploads/product/',
        'cancelImg' : 'jquery/uploadify/cancel.png',
        'removeCompleted' : true,
        'auto':true,
        'buttonText': 'SELECT FILE',
        'fileExt'     : '*.pdf; *.zip; *.rar; *.doc;*.mp4;',
        'fileDesc'    : 'Select Files *.pdf;*.zip;*.rar;*.doc;*.mp4;',
        'onCancel'    : function(event,ID,fileObj,data) {
            $("#btnSubmit").attr("disabled",false);
        },
        'onSelect':function(event,ID,fileObj) {
            $("#btnSubmit").attr("disabled",true);
        },
        'onComplete' :function(event,queueID,fileObj,response,data){
            $("#ziliao").val(response);
            $("#btnSubmit").attr("disabled",false);
        }
    });
});


