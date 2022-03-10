const $acc_arr = [
  ["acc_01.jpg", "벨티드 울 자켓", "215,000원"],
  ["acc_02.jpg", "모헤어 자켓", "250,000원"],
  ["acc_03.jpg", "블랙 벨티드 자켓", "185,000원"],
  ["acc_04.jpg", "벨티드 울 자켓", "210,000원"],
  ["acc_05.jpg", "캐시미어 벨티드 롱 코트", "285,000원"],
  ["acc_06.jpg", "쇼트 패딩", "230,000원"],
  ["acc_07.jpg", "모헤어 롱 코트", "355,000원"],
  ["acc_08.jpg", "벨티드 자켓", "265,000원"],
];

const $acc_container = document.querySelector("#acc .wrap .container");
let $case = "";
for(v of $acc_arr){
  $case += `
    <div class="box">
      <div class="img" style="background-image: url(./img/accessories/${v[0]});">
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
$acc_container.innerHTML = $case;