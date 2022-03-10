<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입</title>
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/member.css">
</head>
<body>
  <header>
    <?php include "./header.php"?>
  </header>


  <div class="container">
    <div id="member_form">
      <form name="member_form" action="./member_insert.php" method="post">
        <h2>회원가입</h2>

        <div class="form id">
          <div class="label_box">
            <label for="userid"></label>
          </div>
          <div class="input_box">
            <input type="text" name="id" id="userid" placeholder="ID *" autocomplete="off">
          </div>
          <div class="add_btn">
            <button type="button" onclick="check_id();">중복체크</button>
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
            <input type="text" name="name" id="username" placeholder="Name *" autocomplete="off">
          </div>
        </div>

        <div class="form phone">
          <div class="label_box">
            <label for="userphone">Phone Number *</label>
          </div>
          <select id="phone" name="phone1">
            <option value="010" selected>010</option>
            <option value="011">011</option>
            <option value="016">016</option>
            <option value="016">017</option>
            <option value="018">018</option>
            <option value="019">019</option>
          </select>
          <input id="phone2" name="phone2" type="tel" maxlength="4" autocomplete="off">
          <input id="phone3" name="phone3" type="tel" maxlength="4" autocomplete="off">
        </div>

        <div class="form">
          <div class="label_box">
            <label for="useremail"></label>
          </div>
          <div class="input_box email_input">
            <input type="text" name="email1" placeholder="Email *" autocomplete="off">
            <span>@</span>
            <input type="text" name="email2" autocomplete="off" autocomplete="off">
          </div>
        </div>

        <div class="buttons">
          <button type="button" onclick="check_input();">회원가입</button>
          <button type="button" onclick="reset_form();">취소하기</button>
        </div>
      </form>
    </div>
  </div>


  <footer>
    <?php include "./footer.php"?>
  </footer>


  <script src="./js/common.js"></script>
  <script src="./js/member_form.js"></script>
</body>
</html>