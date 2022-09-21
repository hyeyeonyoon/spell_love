$(document).ready(function(){
  $(".tab_menu li").eq(0).addClass("active");
  $(".tab_cont").eq(0).show();
  function tabMenu(){
    $(".tab_menu li button").click(function(){
      var tabBtn = $(this);
      var selected = tabBtn.closest("li");
      var $idx = selected.index();
      var tabCont = tabBtn.closest(".tab_menu").siblings(".tab_cont");
      selected.addClass("active").siblings().removeClass("active");
      tabCont.eq($idx).show().siblings(".tab_cont").hide();
    })
  }
  tabMenu();

  function dropdownMenu(){
    $(".faq_wrap .tab_cont ul li .cont").hide();
    $(".faq_wrap .tab_cont ul li .link").click(function(){
      var speed = 180;
      var link = $(this);
      var item = link.closest("li");
      if(item.hasClass("opened")){
        item.removeClass("opened").find(".cont").slideUp(speed);
      }else{
        item.addClass("opened").find(".cont").slideDown(speed);
        item.siblings("li").removeClass("opened").find(".cont").slideUp(speed);
      }
    })
  }
  dropdownMenu();
});