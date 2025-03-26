<?php
$servername = "localhost";
$username = "u878395729_bharat";
$password = "Arun@@999";
$dbname = "u878395729_nav";
// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
     echo "connection successfullly";
}
?>
