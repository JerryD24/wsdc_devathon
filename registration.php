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
  // $image=$_POST['image'];

  $stat_check="SELECT * FROM wsdc_table";     //aaaaaa
  $aaa=mysqli_query($con,$stat_check);
  $result=mysqli_fetch_array($aaa);
  
  if(!$result['stat_app']){
  $inqry="INSERT INTO wsdc_table(name,adhar,address,gender,department,specialization,category,PWD,date,notes,docs,app_stat) VALUES ('$nm','$adhar','$address','$gender','$depart','$specialization','$category','$pwd','$date','$notes','$docs','true')";
  mysqli_query($con,$inqry);
  header('location:show.php');
  }
  else{
    echo "User Already Exists";
  //header('location:index.html');
  }
  }
  ?>