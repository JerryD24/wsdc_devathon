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
    Enter mail<input type="email" required="true" name="mail"><br>
    Enter pass<input type="password" required="true" name="pass"><br>
    <input type="submit" name="submit" value="submit">
  </form>
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
  ?>
</body>
</html>