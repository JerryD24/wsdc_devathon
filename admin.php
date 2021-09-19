<?php
session_start();

if($_SESSION['admin']==1){
 
}
else{
    header('location:index.html');
}

?>