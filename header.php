<?php
  session_start();

  if(isset($_SESSION['userid'])){
    $userid = $_SESSION["userid"];
  }else{
    $userid = "";
  }

  if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  }else{
    $username = "";
  }

  if(isset($_SESSION['userlevel'])){
    $userlevel = $_SESSION['userlevel'];
  }else{
    $userlevel = "";
  }
?>

<div class="event">
  <p>신규가입시 10% 할인코드 즉시 지급 <a href="./member_form.php">회원가입 하러가기</a></p>
</div>
<div class="main_header">
  <div class="wrap">
    <div class="ham_btn">
      <img src="./img/svg/hamburger_icon.svg" alt="메뉴 아이콘">
    </div>
    <div class="logo">
      <h1><a href="./index.php">Spell&Love</a></h1>
    </div>
    <div class="menu">
      <span class="close_btn"></span>
      <ul>
        <li><a href="./outer.php">outer</a></li>
        <li><a href="./top.php">top</a></li>
        <li><a href="./bottom.php">bottom</a></li>
        <li><a href="./dress.php">dress</a></li>
        <li><a href="./bag_shoes.php">bag & shoes</a></li>
        <li><a href="./accessories.php">accessories</a></li>
      </ul>
    </div>
    <div class="icon">
      <ul>
<?php
  if(!$userid){
?>
        <li class="login"><a href="./login_form.php">Login</a></li>
        <li><a href="./login_form.php"><img src="./img/icon/user_icon_empty.png" alt="로그아웃하기"></a></li>
<?php
  }else{
?>
        <li class="logout"><a href="./logout.php">Logout</a></li>
        <li><a href="./member_modify_form.php"><img src="./img/icon/user_icon_empty.png" alt="로그인하기"></a></li>
<?php
  }
?>
        <li class="search_icon"><a href=""><img src="./img/icon/search_icon.png" alt="검색하기"></a></li>
      </ul>
    </div>
  </div>
</div>

<div class="dark"></div>
<div id="pop_layer">
  <div class="container">
    <input type="text" placeholder="검색어를 입력하세요.">
    <button class="close_btn" type="button" onclick="CloseSearch()"><img src="./img/icon/close_icon.png" alt="닫기"></button>
  </div>
</div>
