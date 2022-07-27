<?php
    session_start();
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $dbname = "govind";
    $conn = mysqli_connect($sname,$uname,$pass,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      // echo "Connected successfully";

?>