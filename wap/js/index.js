/**
 * Created by ccitxu on 2016/1/2.
 */
$(function(){
  $(".news_list li,.list li,.study-list li,.courselist li").bind('touchstart',function(){
      $(this).css("background-color","#f2f2f2");
  }).bind('touchend',function(){
      $(this).css("background-color","#fff");
  })

    /*

     var p = 1; //��¼�ڼ�ҳ
    $('.more').bind('touchend',function () {
        p += 1; //��һҳ


        //===========ģ�����
        var s ="";
        for (var i = p * 10 + 1, j = p * 10 + 10; i <= j; i++) s += "<li>sdfsdfsdfsdfsd" + i + "</li>";

        $(this).before(s);
        //===========ģ�����
        /*
         //ʵ��Ӧ��
         $.ajax({ url: 'xxxx.aspx', data: { page: p }, cache: false, dataType: 'html', success: function (html) {
         $(this).before(html); //xxxx.aspx�������������ģ�����
         } });
        return false;
    });
*/
$(".search").bind("touchstart",function(){

   // $(".search-box").show(500);
   $(".search-box").toggleClass("search-box1");
});

    //$(".search").toggle(function(){
    //    $(".search-box").show(500);
    //},function(){
    //    $(".search-box").hide(500);
    //});

})