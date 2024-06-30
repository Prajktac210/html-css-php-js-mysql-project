<?php

$host = "localhost"; // Host name
$username = "root"; // MySQL username
$password = ""; // MySQL password (leave empty if none)
$db_name = "matrimony"; // Database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optionally, you can echo a success message here
// echo "Connected successfully";

?>
