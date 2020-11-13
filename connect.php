<?php
$servername = 'mysql-michalgrudzien04.alwaysdata.net';
$username = '218517';
$password = 'ZAKo140';
$dbname = 'michalgrudzien04_baza';

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
die('Connection failed: '. $conn->connection_error);
?>
