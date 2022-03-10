$(document).ready(function(){
  //sticky header
  let header_height = $("header").height();

  function scrollEvt(){
    const scrollTop = $(window).scrollTop();
    if(scrollTop > header_height){
      $("header").addClass("active");
    }else{
      $("header").removeClass("active");
    }
  }

  $(window).scroll(function(){
    scrollEvt();
  });


  //top_icon
  $("#top_icon").on("click", function(){
    $("html, body").animate({scrollTop:0}, 300);
    return false;
  });

  $(window).scroll(function(){
    if($(this).scrollTop() > header_height){
      $("#top_icon").fadeIn();
    }else{
      $("#top_icon").fadeOut();
    }
  });
});

//hamburger icon
const $hamBtn = document.querySelector(".ham_btn");
const $closeBtn = document.querySelector(".close_btn");
const $menu = document.querySelector(".menu");
const $dark = document.querySelector(".dark");

$hamBtn.addEventListener("click", function(){
  $menu.classList.add("active");
  $dark.classList.add("active");
});
$closeBtn.addEventListener("click", function(){
  $menu.classList.remove("active");
  $dark.classList.remove("active");
});
$dark.addEventListener("click", function(){
  $menu.classList.remove("active");
  $dark.classList.remove("active");
});


//검색 아이콘 팝업 레이어
const $searchIcon = document.querySelector(".search_icon");
const $searchPopup = document.querySelector("#pop_layer");

$searchIcon.addEventListener("click", function(e){
  e.preventDefault();
  $searchPopup.style.display = "block";
  $dark.classList.add("active");
});
function CloseSearch(){
  $searchPopup.style.display = "none";
  $dark.classList.remove("active");
}


