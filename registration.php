<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="POST">
    Enter name<input type="text" required="true" name="name"><br>
    Enter mail<input type="email" required="true" name="mail"><br>
    Enter pass<input type="password" required="true" name="pass"><br>
    confirm pass<input type="password" required="true" name="cpass"><br>
    <input type="submit" name="submit" value="submit">
  </form>
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
</body>
</html>