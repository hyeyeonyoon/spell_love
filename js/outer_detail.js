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


  //datail description
  $(".product_description div:nth-child(2)").hide();
  $(".product_description div:nth-child(3)").hide();
  
  let $detail = $(".detail_title ul li");
  for(v of $detail){
    console.log(v);
    let $index = v.index();
  }
});