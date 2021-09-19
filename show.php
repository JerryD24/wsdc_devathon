<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  session_start();
  $data = $_SESSION['data'];
  ?>
  <h2>your data</h2>
  <p>
    <h4>Name:<?php echo $data["name"];?></h4><br>
    <h4>Adhar:<?php echo $data["adhar"];?></h4><br>
    <h4>Address:<?php echo $data["address"];?></h4><br>
    <h4>Department:<?php echo $data["department"];?></h4><br>
    <h4>Specialization:<?php echo $data["specialization"];?></h4><br>
    <h4>Category:<?php echo $data["category"];?></h4><br>
    <h4>PWD:<?php echo $data["PWD"];?></h4><br>
    <h4>Date:<?php echo $data["date"];?></h4><br>
    <h4>Notes:<?php echo $data["notes"];?></h4><br>
    <h4>Docs:<?php echo $data["docs"];?></h4><br>
    <h4>Image:<?php echo $data["image"];?></h4><br>
    <h4>Status:<?php echo $data["stat_app"];?></h4><br>
  </p>
  <button><a href="logout.php">Log out</a></button>
</body>
</html>