<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>아이디 중복체크</title>
  <link rel="stylesheet" href="./css/idChk_pop.css">
</head>
<body>
  <div class="logo">
    <p>Spell&Love</p>
  </div>
  <div class="txt">
    <h2 id="idChk_title">아이디 중복 확인</h2>
    <div id="idChk_txt">
  </div>
<?php
  $id = $_GET["id"];
  if(!$id){
    echo("<p>아이디를 입력하세요.</p>");
  }else{
    include "./db_con.php";
    $sql = "select * from members where id='$id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);

    if($num_record){
      echo("<p><b>".$id."</b> 는 중복된 아이디 입니다.</p><p>다른 아이디를 사용해 주세요.</p>");
    }else{
      echo("<p><b>".$id."</b>는 사용 가능합니다.</p>");
    }
  }
?>
  </div>
  <div id="close">
    <button type="button" onclick="self.close();">닫기</button>
  </div>
</body>
</html>
<!-- http://localhost:8080/spelllove/member_check_id.php?id=aaa -->
