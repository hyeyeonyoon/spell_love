const $outer_arr = [
  ["outer_01_1.jpg", "벨티드 자켓", "185,000원"],
  ["outer_03_1.jpg", "모헤어 자켓", "250,000원"],
  ["outer_04_1.jpg", "체크 벨티드 자켓", "185,000원"],
  ["outer_05_1.jpg", "블랙 벨티드 자켓", "185,000원"],
  ["outer_06_1.jpg", "벨티드 울 자켓", "210,000원"],
  ["outer_07_1.jpg", "캐시미어 벨티드 롱 코트", "285,000원"],
  ["outer_09_1.jpg", "모헤어 롱 코트", "355,000원"],
  ["outer_10_1.jpg", "울 자켓", "320,000원"],
];

const $outer_container = document.querySelector("#outer .wrap .container");
let $case = "";
for(v of $outer_arr){
  $case += `
    <div class="box">
      <div class="content">
        <div class="img" style="background-image: url(./img/outer/${v[0]});"><a href="./outer_detail.php"></a></div>
        <span class="add_bag">
          <span class="txt">Add to WishList</span>
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
$outer_container.innerHTML = $case;
