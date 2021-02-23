<?php

    $conn= new mysqli($_SERVER['mysqlservername'],$_SERVER['mysqlusername'],$_SERVER['mysqlpassword'],$_SERVER['mysqldbname']);
    if ($conn->connect_error) {
        die("connection failed: ".mysqli_connect_error());
    }


?>
