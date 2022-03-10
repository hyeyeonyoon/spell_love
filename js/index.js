$(document).ready(function(){
  //Main Banner Slick
  $("#slick_slider").slick({
    autoplay : true,
    fade : true,
    pauseOnHover : true,
    autoplaySpeed : 3000
  });
});

const $popular_arr = [
  ["outer_main.jpg", "Jackets & Coats", "outer.php", "재킷 & 코트 모두 보기"],
  ["top_main.jpg", "Knits & Tops", "top.php", "상의 모두 보기"],
  ["bag_main.jpg", "Bags", "bag_shoes.php", "가방 모두 보기"],
  ["acc_main.jpg", "Accessories", "accessories.php", "악세사리 모두 보기"],
];

const $popular_case = document.querySelector("#popular .wrap .box");
let $case = "";
for(v of $popular_arr){
  $case += `
    <div class="cont">
      <div class="img" style="background-image: url(./img/${v[0]});"></div>
      <div class="txt">
        <p>${v[1]}</p>
        <a href="./${v[2]}">${v[3]}</a>
      </div>
    </div>
  `;
}
$popular_case.innerHTML = $case;