<?php
//enter the name of host or ip in my case is localhost
$host = "localhost";
//username 
$username = "root";
//the password of the username
$password = "5708936";
//please add the database name 
$database = "clouds";

$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
