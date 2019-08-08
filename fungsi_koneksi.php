<?php
  function koneksi_db(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "web";
     
    $link = mysqli_connect($host,$user,$pass,$db);
     
     
    if (!$link) {
      echo "error : ".mysqli_error();
    }
     
    return $link;
  }
?>