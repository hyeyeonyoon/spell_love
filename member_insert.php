<?php

  $id = $_POST["id"];
  $pass = $_POST["pass"];
  $name = $_POST["name"];
  $phone1 = $_POST["phone1"];
  $phone2 = $_POST["phone2"];
  $phone3 = $_POST["phone3"];
  $email1 = $_POST["email1"];
  $email2 = $_POST["email2"];
  $regist_day = date("Y-m-d (H:i)");

  $phone = $phone1.$phone2.$phone3;
  $email = $email1."@".$email2;


  include "./db_con.php";

  $sql = "select * from members where id='$id'";
  $result = mysqli_query($con, $sql);
  $num_record = mysqli_num_rows($result);
  if($num_record){
    echo("
      <script>
        alert('동일한 아이디가 존재합니다. 다른 아이디를 사용해 주세요');
        history.go(-1);
      </script>
    ");
  }else{
    $sql1 = "insert into members (id, pass, name, phone, email, regist_day, level) values('$id', '$pass', '$name', '$phone', '$email', '$regist_day', 9)";
    mysqli_query($con, $sql1);
  }

  mysqli_close($con);


  echo "
    <script>
      location.href='./index.php';
    </script>
  ";
?>