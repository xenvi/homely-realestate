<?php
    session_start();
    session_destroy();

    echo "<div class='alert alert-logout alert-danger'>You have been logged out. Redirecting to home page.</div>";
    header ('Location: main.php');
/*
    header( "Refresh:3; url=main.php", true, 303);
   exit;
?>
