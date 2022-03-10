const $bagShoes_arr = [
  ["bag_shoes_01.jpg", "벨티드 울 자켓", "215,000원"],
  ["bag_shoes_02.jpg", "모헤어 자켓", "250,000원"],
  ["bag_shoes_03.jpg", "블랙 벨티드 자켓", "185,000원"],
  ["bag_shoes_04.jpg", "벨티드 울 자켓", "210,000원"],
  ["bag_shoes_05.jpg", "캐시미어 벨티드 롱 코트", "285,000원"],
  ["bag_shoes_06.jpg", "쇼트 패딩", "230,000원"],
  ["bag_shoes_07.jpg", "모헤어 롱 코트", "355,000원"],
  ["bag_shoes_08.jpg", "벨티드 자켓", "265,000원"],
];

const $bagShoes_container = document.querySelector("#bag_shoes .wrap .container");
let $case = "";
for(v of $bagShoes_arr){
  $case += `
    <div class="box">
      <div class="img" style="background-image: url(./img/bag_shoes/${v[0]});">
        <span class="add_bag">
          <span class="txt">Add to WishList</span>
          <span class="fav"></span>
        </span>
      </div>
      <div class="txt">
        <a href="" class="title">${v[1]}</a>
        <span class="price">${v[2]}</span>
      </div>
    </div>
  `;
}
$bagShoes_container.innerHTML = $case;