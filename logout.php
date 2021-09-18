<?php

session_start();        //starting of session to trace the user-PS
ob_start();         //for removing the buffer if any-PS

session_destroy();
header('location:index.php');           //for destroying the session-PS

?>