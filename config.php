<?php
/*try{
    $conn = new PDO("mysql:host=localhost;dbname=user-verification", 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "connection failed: " . $e->getMessage();
}*/
$connect = mysqli_connect("localhost","root","","coins_db");
?> 