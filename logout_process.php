<?php
    session_destroy();
    unset( $_SESSION['email'], $_SESSION['username'], $_SESSION['verified']);
    header("location:login.php");


?>