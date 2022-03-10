<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spell&Love - 회원정보 수정</title>
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/member.css">
</head>
<body>
  <header>
    <?php include "./header.php"?>
  </header>

<?php
  include "./db_con.php";

  $sql = "select * from members where id='$userid'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);

  $name = $row["name"];

  $email = $row["email"];
  $ch_email = explode("@", $email);
  $email1 = $ch_email[0];
  $email2 = $ch_email[1];

  $phone = $row["phone"];
  $phone1 = substr($phone,0,3);
  $phone2 = substr($phone,3,4);
  $phone3 = substr($phone,4,4);

  mysqli_close($con);
?>

  <div class="container">
    <div class="img"></div>
    <div id="member_form">
      <form name="member_form" action="./member_modify.php?id=<?=$userid?>" method="post">
        <h2>회원정보 수정</h2>
        <div class="menu">
          <ul>
            <li><a href="./member_modify_form.php">회원정보</a></li>
            <li><a href="">주문 및 배송</a></li>
            <li><a href="">장바구니</a></li>
          </ul>
        </div>

        <div class="form id">
          <div class="label_box">
            <label for="userid"></label>
          </div>
          <div class="input_box">
            <input type="text" name="id" id="userid" value="<?=$userid?>" placeholder="ID *" readonly>
          </div>
        </div>

        <div class="form password">
          <div class="label_box">
            <label for="userpass"></label>
          </div>
          <div class="input_box">
            <input type="password" name="pass" id="userpass" placeholder="Password *" autocomplete="off">
          </div>
        </div>

        <div class="form">
          <div class="label_box">
          <label for="userpass_confirm"></label>
          </div>
          <div class="input_box">
          <input type="password" name="pass_confirm" id="userpass_confirm" placeholder="Confirm password *" autocomplete="off">
          </div>
        </div>

        <div class="form name">
          <div class="label_box">
            <label for="username"></label>
          </div>
          <div class="input_box">
            <input type="text" name="name" id="username" value="<?=$name?>" placeholder="Name *">
          </div>
        </div>

        <div class="form phone">
          <div class="label_box">
            <label for="userphone">Phone Number *</label>
          </div>
          <select id="phone" name="phone1" value="<?=$phone1?>">
            <option value="010" selected>010</option>
            <option value="011">011</option>
            <option value="016">016</option>
            <option value="016">017</option>
            <option value="018">018</option>
            <option value="019">019</option>
          </select>
          <input id="phone2" name="phone2" type="tel" value="<?=$phone2?>" maxlength="4" autocomplete="off">
          <input id="phone3" name="phone3" type="tel" value="<?=$phone3?>" maxlength="4" autocomplete="off">
        </div>

        <div class="form">
          <div class="label_box">
            <label for="useremail"></label>
          </div>
          <div class="input_box email_input">
            <input type="text" name="email1" value="<?=$email1?>" placeholder="Email *">
            <span>@</span>
            <input type="text" name="email2" value="<?=$email2?>">
          </div>
        </div>

        <div class="buttons">
          <button type="button" onclick="check_input();">수정하기</button>
          <button type="button" onclick="reset_form_modify();">취소하기</button>
        </div>
      </form>
    </div>
  </div>

  <footer>
    <?php include "./footer.php"?>
  </footer>


  <script src="./js/member_form.js"></script>
</body>
</html>