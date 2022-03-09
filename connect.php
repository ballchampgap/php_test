<?php
	
  $host = "us-cdbr-east-05.cleardb.net";
	$username = "b67d472a787082";
	$password = "4c1b833f";
	$db_name = "heroku_4d02897cb09a476";

    $conn = mysqli_connect($host, $username, $password, $db_name); //เชื่อมต่อกับฐานข้อมูล
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>