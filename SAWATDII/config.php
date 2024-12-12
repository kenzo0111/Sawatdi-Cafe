<?php
$host = "localhost";
$username = "sawatdii"; // Default XAMPP username is "root"
$password = "OnoiipSRQORnm7]F";     // Default XAMPP password is an empty string
$database = "sawatdii_cafe";

$conn = mysqli_connect($host, $username, $password, $database);


// OnoiipSRQORnm7]F Admin Password
// sawatdii usernmae

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
