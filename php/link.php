<?php

  // localhost
  // $con= new mysqli("localhost","root","","crypto-db");
  
  // testsite
      $con= new mysqli("localhost","cryptic_ott","HAgYdvWTCglx","cryptic_ott");
  $img_link = "images/courses/";
  $img_link2 = "images/";
  if($con->connect_error){
    die("connection Failed" .$con->connect_error);
  }
?>