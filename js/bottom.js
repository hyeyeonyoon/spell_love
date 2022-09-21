const $bottom_arr = [
  ["bottom_01.jpg", "벨티드 자켓", "185,000원"],
  ["bottom_02.jpg", "벨티드 울 자켓", "215,000원"],
  ["bottom_03.jpg", "모헤어 자켓", "250,000원"],
  ["bottom_04.jpg", "체크 벨티드 자켓", "185,000원"],
  ["bottom_05.jpg", "블랙 벨티드 자켓", "185,000원"],
  ["bottom_06.jpg", "벨티드 울 자켓", "210,000원"],
  ["bottom_07.jpg", "캐시미어 벨티드 롱 코트", "285,000원"],
  ["bottom_08.jpg", "쇼트 패딩", "230,000원"],
];

const $bottom_container = document.querySelector("#bottom .wrap .container");
let $case = "";
for(v of $bottom_arr){
  $case += `
    <div class="box">
      <div class="content">
        <div class="img" style="background-image: url(./img/bottom/${v[0]});"></div>
        <span class="add_bag">
          <span class="txt">ADD TO BAG</span>
          <span class="fav"></span>
        </span>
      </div>
      <div class="txt">
        <a href="./outer_detail.php" class="title">${v[1]}</a>
        <span class="price">${v[2]}</span>
      </div>
    </div>
  `;
}
$bottom_container.innerHTML = $case;