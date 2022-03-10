<?php
  //http://localhost:8080/spelllove/login_ok.php

  $id = $_POST["id"];
  $pass = $_POST["pass"];

  include "./db_con.php";

  $sql = "select * from members where id='$id'";
  $result = mysqli_query($con, $sql);
  $num_record = mysqli_num_rows($result);

  if(!$num_record){
    echo("
      <script>
        alert('등록되지 않은 아이디 입니다.');
        history.go(-1);
      </script>
    ");
  }else{
    $row = mysqli_fetch_array($result);
    $db_pass = $row["pass"];

    mysqli_close($con);

    if($pass != $db_pass){
      echo ("
        <script>
          alert('입력한 비밀번호가 일치하지 않습니다.');
          history.go(-1);
        </script>
      ");
      exit;
    }else{
      session_start();
      $_SESSION["userid"] = $row["id"];
      $_SESSION["username"] = $row["name"];
      $_SESSION["userlevel"] = $row["level"];

      echo("
        <script>
          location.href = './index.php';
        </script>
      ");
    }
  }
?>