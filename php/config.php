<?php

  // localhost
  $con= new mysqli("localhost","root","qwerty","crypto-db");
  
  // testsite
  // $con= new mysqli("localhost","finflix","finflix","finflix");

  if($con->connect_error){

    die("connection Failed" .$con->connect_error);

  }
  
?>