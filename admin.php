<?php
session_start();

if($_SESSION['admin']!=1){
    header('location:index.html');
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="landing page css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="wrapper">
            <div class="title-text">
                
                <div class="title signup">
                    Administrator</div>
            </div>

            
                <div class="form-inner">
                    <form action="show.php" class="login" method="post" >
                        <div class="field">
                            <input type="text" placeholder="Aadhar" name="adhar" required>
                        </div>
                        <div class="field btn">
                            <div class="btn-layer">
                            </div>
                            <input type="submit" value="Enter" name="submit">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
