<?php
	
  $host = "us-cdbr-east-05.cleardb.net";
  $username = "ba7e9edf71804c";
  $password = "2c556d4e";
  $db_name = "heroku_208c777a9db0e9f";

    $conn = mysqli_connect($host, $username, $password, $db_name); //เชื่อมต่อกับฐานข้อมูล
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>