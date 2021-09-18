<?php
  include "./connection.php";
  if(isset($_POST['submit']))
{
  $nm=$_POST['name'];
  $mail=$_POST['mail'];
  $ps=$_POST['pass'];
  $cps=$_POST['cpass'];
  if($ps==$cps)
  {
    $inqry="INSERT INTO db(name, mail, pass) VALUES ('$nm','$mail','$pass')";
  mysqli_query($con,$inqry);
  echo "success";
  header('location:index.php');
  }
  else
  echo "pass dont match";

}
  ?>