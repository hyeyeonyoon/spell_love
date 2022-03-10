<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Outer 상세페지이지</title>
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/outer_detail.css">
</head>
<body>
  <header>
    <?php include "./header.php"?>
  </header>

  <section id="detail">
    <div class="wrap">
      <div class="left">
        <div class="img"></div>
        <div class="thumb_img">
          <ul>
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="info">
          <div class="title">
            <h2>벨티드 자켓</h2>
            <p><span>185,000</span>원</p>
          </div>
          <div class="size">
            <div class="size_option">Size
              <ul>
                <li>34</li>
                <li>36</li>
                <li>38</li>
                <li>40</li>
                <li>42</li>
                <li>44</li>
              </ul>
            </div>
            <div class="size_guide">size guide</div>
          </div>
          <div class="price">
            <div class="count_price">
              <span class="each_price">185,000</span>원
            </div>
            <div class="count_box">
              <a href="" class="minus">－</a>
              <input type="text" value="1" readonly>
              <a href="" class="plus">＋</a>
            </div>
          </div>
          <div class="button">
            <input type="button" value="장바구니 담기">
          </div>
          <div class="detail_title">
            <ul>
              <li>상품 설명</li>
              <li>배송 & 반품</li>
              <li>상세 정보</li>
            </ul>
          </div>
          <div class="product_description">
            <div class="description">
              <p>정교한 테일러링이 돋보이는 모던한 실루엣의 블레이저입니다. 지속가능한 울 소재로 만들어졌으며, 허리 부분에 다트 주름과 타이 끈을 더해 형태감 있게 완성되었습니다. 라펠 및 칼라는 탑스티치 디테일로 마무리되어 깔끔한 분위기를 연출합니다.</p>
            </div>
            <div class="delivery">
              <p>영업일 기준 1~3일 내 배송</p>
            </div>
            <div class="detail_txt">
              <p>안감: 100% 비스코스 / 드라이 클리닝</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <?php include "./footer.php"?>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./js/common.js"></script>
  <script src="./js/outer_detail.js"></script>
</body>
</html>