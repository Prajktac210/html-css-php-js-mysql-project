<?php
include_once("includes/dbconn.php");

// Assuming you have a table named 'users' where user data is stored
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
} else {
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            // Check if 'username' and 'email' keys exist in the row
            if (isset($row["username"]) && isset($row["email"])) {
                echo "Username: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
                // You can output other user details as well based on your table structure
            } else {
                echo "Username or email key not found in row<br>";
                // Output the entire row for debugging purposes
                print_r($row);
            }
        }
    } else {
        echo "0 results";
    }
}
// Check if 'id' parameter is provided in the URL
if (!isset($_GET['id'])) {
    echo "No profile ID specified.";
    exit(); // Terminate script if 'id' parameter is missing
}

$id = $_GET['id'];

// Getting profile details from database
$sql = "SELECT * FROM customer WHERE cust_id = $id";
$result = mysqlexec($sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
 
    // Retrieve profile details
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $sex=$row['sex'];
    $email=$row['email'];
    // Retrieve other profile details similarly...
}

mysqli_close($conn);
?>
