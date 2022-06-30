<?php
  session_start();
  include "./connection.php";
  if(isset($_POST['submit']))
{
  $mail=$_POST['mail'];
  $ps=$_POST['pass'];

    $selqry="SELECT * FROM admin_table WHERE email='$mail'";
    $qry=mysqli_query($con,$selqry);
    $count=mysqli_num_rows($qry);
    $admin="admin";       //for sake of simplicity
    if($mail!=$admin){                 //altered if(!$count){
    echo "Incorrect data";
    }
    else
    {
      //$res=mysqli_fetch_array($qry);
      $res="admin";
      if($res==$ps){    //altered if($res['password']==$ps){
        $_SESSION['admin']=1;
        echo "inside admin";
      header('location:admin.php');}
      else
      header('location:index.html');
    }

}
