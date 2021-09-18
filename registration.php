<?php
  include "./connection.php";
  if(isset($_POST['submit']))
{
  $nm=$_POST['name'];
  $adhar=$_POST['adhar'];
  $address=$_POST['address'];
  $gender=$_POST['gender'];
  $depart=$_POST['department'];
  $specialization=$_POST['specialization'];
  $category=$_POST['category'];
  $pwd=$_POST['PWD'];
  $date=$_POST['date'];
  $notes=$_POST['notes'];
  $docs=$_POST['docs'];
  $image=$_POST['image'];

  $stat_check="SELECT stat_app FROM wsdc_table";     //aaaaaa
  mysqli_query($con,$stat_check);
  
  if(!$stat_check){
  $inqry="INSERT INTO wsdc_table(name,adhar,address,gender,department,specialization,category,PWD,date,notes,docs,image,app_stat) VALUES ('$nm','$adhar','$address','$gender','$depart','$specialization','$category','$pwd','$date','$notes','$docs','$image','true')";
  mysqli_query($con,$inqry);
  $change_stat="UPDATE wsdc_table SET stat_app='true'";
  mysqli_query($con,$change_stat);
  header('location:index.html');
  }
  else
  header('location:landing page.html');
  }
  ?>