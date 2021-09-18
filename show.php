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
    <h4>Mail:<?php echo $data["mail"];?></h4><br>
    
  </p>
  <button><a href="logout.php">Log out</a></button>
</body>
</html>