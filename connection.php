<?php
  $uname="root";
  $pass="";
  $server="localhost";
  $db="db";
  $con = mysqli_connect($server,$uname,$pass,$db);
  if(!$con)
  echo die(mysqli_connect_error());

?>