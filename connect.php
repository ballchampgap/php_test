<?php

    $host = "us-cdbr-east-05.cleardb.net";
    $username = "b0c48520a43ab3";
    $password = "4e334c79";
    $db_name = "heroku_1bd642d1abf5180";

    $conn = mysqli_connect($host, $username, $password, $db_name); //เชื่อมต่อกับฐานข้อมูล

    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>