<?php
  $hostname = "localhost";
  $username = "root";
  $password = "1324";
  $dbname = "BDV2";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
