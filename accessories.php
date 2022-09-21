<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accessories</title>
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/accessories.css">
</head>
<body>
  <header>
    <?php include "./header.php"?>
  </header>

  <div id="acc">
    <div class="wrap">
      <h2>Accessories</h2>
      <div class="upper">
        <div class="bread_crumb">
          <ul>
            <li><a href="./index.php">Home</a></li>
            <span>/</span>
            <li><a href="./accessories.php">Accessories</a></li>
          </ul>
        </div>
        <div class="sort">
          <select id="" name="">
            <option value="">신상품순</option>
            <option value="">낮은가격순</option>
            <option value="">높은가격순</option>
          </select>
        </div>
      </div>
      <div class="container">
        <!--
        <div class="box">
          <div class="img"></div>
          <div class="txt">
            <a href="" class="title">title</a>
            <span class="price">price</span>
          </div>
        </div>
        -->
      </div>
      <div class="paging">
        <a href="#" class="direction first">처음</a>
        <a href="#" class="direction prev">이전</a>
        <a href="#" class="num active">1</a>
        <a href="#" class="num">2</a>
        <a href="#" class="num">3</a>
        <a href="#" class="num">4</a>
        <a href="#" class="num">5</a>
        <a href="#" class="direction next">다음</a>
        <a href="#" class="direction end">끝</a>
      </div>
    </div>
  </div>

  <footer>
    <?php include "./footer.php"?>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="./js/common.js"></script>
  <script src="./js/accessories.js"></script>
</body>
</html>