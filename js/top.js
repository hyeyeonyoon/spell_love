const $top_arr = [
  ["top_02.jpg", "벨티드 울 자켓", "215,000원"],
  ["top_03.jpg", "모헤어 자켓", "250,000원"],
  ["top_05.jpg", "블랙 벨티드 자켓", "185,000원"],
  ["top_06.jpg", "벨티드 울 자켓", "210,000원"],
  ["top_07.jpg", "캐시미어 벨티드 롱 코트", "285,000원"],
  ["top_08.jpg", "쇼트 패딩", "230,000원"],
  ["top_09.jpg", "모헤어 롱 코트", "355,000원"],
  ["top_11.jpg", "벨티드 자켓", "265,000원"],
];

const $top_container = document.querySelector("#top .wrap .container");
let $case = "";
for(v of $top_arr){
  $case += `
    <div class="box">
      <div class="img" style="background-image: url(./img/top/${v[0]});">
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
$top_container.innerHTML = $case;