<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인</title>
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>
  <header>  
    <?php include "./header.php"?>
  </header>

  <div id="login">
    <div class="img"></div>
    <div class="container">
      <div class="login_box">
        <form action="./login_ok.php" class="login_form" name="login_form" method="post">
          <h2>로그인</h2>
          <div class="login_id">
            <input type="id" name="id" placeholder="ID" autocomplete="off">
          </div>
          <div class="login_pw">
            <input type="password" name="pass" placeholder="Password" autocomplete="off">
          </div>
          <div id="login_btn">
            <button type="button" onclick="check_input();">로그인</button>
          </div>
          <div class="login_etc">
            <a href="">아이디 찾기</a>
            <a href="">비밀번호 찾기</a>
          </div>
        </form>
      </div>
      <div class="register_box">
        <h2>회원가입</h2>
        <div class="txt">
          <p>신규 가입시 무료 배송 쿠폰 지급</p>
          <p>회원 가입 후, 첫 구매 고객에게 최대 만원 할인 쿠폰 지급</p>
          <p>매년 생일 쿠폰 지급</p>
        </div>
        <div id="register_btn">
          <button type="button"><a href="./member_form.php">회원가입</a></button>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <?php include "./footer.php"?>
  </footer>


  <script src="./js/common.js"></script>
  <script src="./js/login.js"></script>
</body>
</html>

