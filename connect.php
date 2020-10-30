<?php
$servername = 'sql7.freemysqlhosting.net';
$username = 'sql7373528';
$password = 'SnSvdZtxTb';
$dbname = 'sql7373528';

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
die('Connection failed: '. $conn->connection_error);
?>
