<?php
  $uname="root";
  $pass="";
  $server="localhost";
  $db="wsdc_db";
  $con = mysqli_connect($server,$uname,$pass,$db);
  if(!$con)
  header('location:landing page.html');
?>