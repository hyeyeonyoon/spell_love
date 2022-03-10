<?php
//http://localhost:8080/spelllove/member_modify.php?id=aaa

  $id = $_GET["id"];
  $pass = $_POST["pass"];
  $name = $_POST["name"];

  $phone1 = $_POST["phone1"];
  $phone2 = $_POST["phone2"];
  $phone3 = $_POST["phone3"];
  $phone = $phone1.$phone2.$phone3;

  $email1 = $_POST["email1"];
  $email2 = $_POST["email2"];
  $email = $email1."@".$email2;
  
  include "./db_con.php";
  $sql = "update members set pass='$pass', name='$name', phone='$phone', email='$email' where id='$id'";
  mysqli_query($con, $sql);
  mysqli_close($con);

  session_start();
  $_SESSION['username'] = $name;
  

  echo("
    <script>
      history.go(-2);
    </script>
  ");
?>