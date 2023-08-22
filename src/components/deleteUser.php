<?php
// Import connection
require 'conn.php';

// Get post data
$fname = $_POST["fname"];
$lname = $_POST["lname"];

// Sql query
$sql = "DELETE FROM student WHERE fName = '$fname' AND lName = '$lname'";

// Create connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    // Send sql query
    if ($conn->query($sql) === TRUE) {
        echo "Record Deleted!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>