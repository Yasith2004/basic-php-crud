<?php
// Import connection
require 'conn.php';

// Get post data
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];

// Sql query
$sql = "UPDATE student SET age= $age WHERE fName = '$fname' AND lName = '$lname'";

// Create connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    // Send sql query
    if ($conn->query($sql) === TRUE) {
        echo "User Data Updated Successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>