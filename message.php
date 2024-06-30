<?php
include_once("includes/basic_includes.php");
include_once("functions.php");

// Establish database connection
$con = mysqli_connect("localhost", "root", "", "matrimony");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Retrieve contact form data
$query = "SELECT * FROM contact_form_data";
$result = mysqli_query($con, $query);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"] . "<br>";
        echo "Phone: " . $row["phone"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Message: " . $row["message"] . "<br><br>";
    }
} else {
    echo "No contact form data found";
}

// Close database connection
mysqli_close($con);
?>
