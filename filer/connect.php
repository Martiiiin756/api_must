<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "api_must";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection if it did not connect it will die.
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>