<?php
// Define database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techsolutions";

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
// }else{echo 'connection is sussfully update';}

