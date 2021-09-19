<?php
  session_start();
  include "./connection.php";
  if(isset($_POST['submit']))
{
  $mail=$_POST['mail'];
  $ps=$_POST['pass'];
    $selqry="select * from db";
    $qry=mysqli_query($con,$selqry);
    $count=mysqli_num_rows($qry);
    if(!$count)
    echo "Incorrect data";
    else
    {
      $res=mysqli_fetch_array($qry);
      $_SESSION['data']=$res;
      header('location:show.php');
    }

}
