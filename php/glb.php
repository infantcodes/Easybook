<?php

$servername = "localhost";
$username = "root";
$password = "3lephantK1d";
$db = "easybook";

// Create connection
$db = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$db) {
   die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>


