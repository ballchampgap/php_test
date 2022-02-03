<?php
	
  $host = "us-cdbr-east-05.cleardb.net";
  $username = "bd2ef0188b7319";
  $password = "30fe5f89";
  $db_name = "heroku_7b702cc5061883a";
  


    $conn = mysqli_connect($host, $username, $password, $db_name); //เชื่อมต่อกับฐานข้อมูล
    mysql_query("SET NAMES UTF8");
    if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>