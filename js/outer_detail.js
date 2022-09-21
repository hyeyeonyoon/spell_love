$(document).ready(function(){
  //thumb nail image
  const $detail_img = ["outer_01_1.jpg", "outer_01_2.jpg", "outer_01_3.jpg", "outer_01_4.jpg"];
  $(".thumb_img li").each(function(index){
    $(this).css("background-image", `url(./img/outer/${$detail_img[index]})`);
  });

  $(".thumb_img li").click(function(){
    const $index = $(this).index();
    $("#detail .wrap .left .img").css("background-image", `url(./img/outer/${$detail_img[$index]})`);
    $(".thumb_img li").removeClass("active");
    $(this).addClass("active");
  });


  //total price
  let $str_price = $(".count_price .each_price").text();
  let $num_price = Number($str_price.replace(/,/g, ""));
  let $total_price = 0;
  let $num = 1;

  $(".minus").click(function(){
    if($num < 2){
      alert("최소 수량은 1개 입니다.");
    }else{
      $num--;
      $(this).siblings("input").val($num);
      $total_price = $num * $num_price;
      let $result_price = $total_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      $(this).closest(".count_box").siblings(".count_price").find(".each_price").text($result_price);
      return false;
    } 
  });
  $(".plus").click(function(){
    $num++;
    $(this).siblings("input").val($num);
    $total_price = $num * $num_price;
    let $result_price = $total_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    $(this).closest(".count_box").siblings(".count_price").find(".each_price").text($result_price);
    return false;
  });


  //size list
  $("#detail .size_list ul li").on("click", function(){
    if($(this).hasClass("active")){
      $(this).removeClass("active");
    }else{
      $(this).addClass("active").siblings('li').removeClass("active");
    }
  });


  //size guide
  $(".size_guide").click(function(){
    $(".size_popup").css("display","block");
    $(".dark").addClass("active");
    $(".title").click(function(){
      $(this).siblings(".content").slideToggle(200);
      $(this).closest("li").siblings("li").children(".content").slideUp(200);
    });
  });
  $(".close_btn").click(function(){
    $(".size_popup").css("display","none");
    $(".dark").removeClass("active");
  });


  //product description
  $(".product_description div").eq(0).addClass("show");
  $(".detail_title ul li").click(function(){
    var $index = $(this).index();
    $(".product_description div").removeClass("show");
    $(".product_description div").eq($index).addClass("show");
  });
});


