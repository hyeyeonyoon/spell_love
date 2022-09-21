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

  <div class="size_popup">
    <div class="inner">
      <h2>사이즈 가이드</h2>
      <ul>
        <li>
          <h3 class="title">사이즈 표 <span class="more_btn">더보기 버튼</span></h3>
          <div class="content">
            <table>
              <colgroup>
                <col width="36%">
                <col width="16%">
                <col width="16%">
                <col width="16%">
                <col width="16%">
              </colgroup>
              <thead>
                <tr>
                  <th>사이즈</th>
                  <th>XS</th>
                  <th>S</th>
                  <th>M</th>
                  <th>L</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>한국</td>
                  <td>44</td>
                  <td>55-66</td>
                  <td>77-88</td>
                  <td>99</td>
                </tr>
                <tr>
                  <td>유럽</td>
                  <td>34</td>
                  <td>36-38</td>
                  <td>40-42</td>
                  <td>44</td>
                </tr>
                <tr>
                  <td>영국</td>
                  <td>8</td>
                  <td>10-12</td>
                  <td>14-16</td>
                  <td>18</td>
                </tr>
                <tr>
                  <td>프랑스/스페인</td>
                  <td>36</td>
                  <td>38-40</td>
                  <td>42-44</td>
                  <td>46</td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
        <li>
          <h3 class="title">상체 치수(CM) <span class="more_btn">더보기 버튼</span></h3>
          <div class="content">
            <table>
            <colgroup>
              <col width="36%">
              <col width="16%">
              <col width="16%">
              <col width="16%">
              <col width="16%">
            </colgroup>
            <thead>
                <tr>
                  <th>사이즈</th>
                  <th>XS</th>
                  <th>S</th>
                  <th>M</th>
                  <th>L</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>가슴</td>
                  <td>80</td>
                  <td>84-88</td>
                  <td>92-96</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>어깨</td>
                  <td>37</td>
                  <td>37.5-38</td>
                  <td>38.5-39</td>
                  <td>39.5</td>
                </tr>
                <tr>
                  <td>허리</td>
                  <td>64</td>
                  <td>68-72</td>
                  <td>76-80</td>
                  <td>84</td>
                </tr>
                <tr>
                  <td>엉덩이</td>
                  <td>88</td>
                  <td>92-96</td>
                  <td>100-104</td>
                  <td>108</td>
                </tr>
                <tr>
                  <td>다리(안쪽)</td>
                  <td>77</td>
                  <td>78-79</td>
                  <td>80-81</td>
                  <td>82</td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
        <li>
          <h3 class="title">신체 치수 측정 방법 <span class="more_btn">더보기 버튼</span></h3>
          <div class="content">
            <p>가슴둘레 : 가슴에서 가장 두드러진 부분을 측정하세요.</p>
            <p>어깨너비 : 양어깨의 끝점 사이를 측정하세요.</p>
            <p>허리둘레 : 허리둘레에서 가장 얇은 부분을 측정하세요.</p>
            <p>엉덩이둘레 : 엉덩이의 가장 넓은 부분을 측정하세요.</p>
            <p>다리 안쪽 길이 : 다리 안쪽의 가장 윗부분부터 측정하세요.</p>
          </div>
        </li>
        <li>
          <h3 class="title">악세사리 사이즈 가이드 <span class="more_btn">더보기 버튼</span></h3>
          <div class="content">
            <table>
              <colgroup>
                <col width="23%">
                <col width="13%">
                <col width="13%">
                <col width="13%">
                <col width="13%">
                <col width="13%">
                <col width="13%">
              </colgroup>
              <tbody>
                <tr>
                  <td>한국</td>
                  <td>230</td>
                  <td>235</td>
                  <td>240</td>
                  <td>250</td>
                  <td>255</td>
                  <td>260</td>
                </tr>
                <tr>
                  <td>유럽</td>
                  <td>36</td>
                  <td>37</td>
                  <td>38</td>
                  <td>39</td>
                  <td>40</td>
                  <td>41</td>
                </tr>
                <tr>
                  <td>영국</td>
                  <td>3.5</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>6.5</td>
                  <td>7.5</td>
                </tr>
              </tbody>
            </table>
          </div>
        </li>
      </ul>
      <button type="button" class="close_btn"></button>
    </div>
  </div>
  <div class="dark"></div>

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
            <div class="size_list">size
              <ul>
                <li><button type="button">34</button></li>
                <li><button type="button">36</button></li>
                <li><button type="button">38</button></li>
                <li><button type="button">40</button></li>
                <li><button type="button">42</button></li>
                <li><button type="button">44</button></li>
              </ul>
            </div>
            <button type="button" class="size_guide">size guide</button>
          </div>
          <div class="price">
            <div class="count_price">
              <span class="each_price">185,000</span>원
            </div>
            <div class="count_box">
              <button type="button" class="minus">－</button>
              <input type="text" value="1" readonly>
              <button type="button" class="plus">＋</button>
            </div>
          </div>
          <div class="button">
            <input type="button" value="장바구니 담기">
          </div>
          <div class="detail_title">
            <ul>
              <li><button type="button">상품 설명</button></li>
              <li><button type="button">배송 & 반품</button></li>
              <li><button type="button">상세 정보</button></li>
            </ul>
          </div>
          <div class="product_description">
            <div class="description">
              <p>정교한 테일러링이 돋보이는 모던한 실루엣의 블레이저입니다. 지속가능한 울 소재로 만들어졌으며, 허리 부분에 다트 주름과 타이 끈을 더해 형태감 있게 완성되었습니다. 라펠 및 칼라는 탑스티치 디테일로 마무리되어 깔끔한 분위기를 연출합니다.</p>
              <ul>
                <li>포인티드 칼라</li>
                <li>가슴 부분의 패치 포켓</li>
                <li>버튼이 달린 플래킷</li>
              </ul>
            </div>
            <div class="delivery">
              <ul>
                <li>영업일 기준 1~3일 내 배송</li>
                <li>배송비 무료 & 무료 반품</li>
                <li>일부 군사지역은 배송이 불가능 할 수 있습니다.</li>
              </ul>
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