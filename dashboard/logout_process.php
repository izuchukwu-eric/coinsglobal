<?php
    session_destroy();
    unset( $_SESSION['email'], $_SESSION['username'], $_SESSION['verified'], $_SESSION['last_time']);
    header("location: ../login.php");


?>