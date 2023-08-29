<!DOCTYPE html>
<head>
    <title> Student Info</title>
    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<?php
// Import connection
require 'conn.php';

// Get post data
$course = $_POST["select-course"];

// Sql query
$sql = "SELECT u.userid, u.fname, u.lname, u.age FROM users AS u WHERE coursename = '$course'";

// Display Table Head
echo "<table class='table table-bordered' >
        <thread>
            <tr><th> User_ID </th><th> FirstName </th><th> LastName </th><th> Age </th></tr>
        </thread>
        <tbody>";

// Create connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    // Send sql query
    $data = $conn->query($sql);
    if ($data == True) {
        while ($row = $data->fetch_assoc()) {
            echo"<tr>
                    <td>".$row["userid"]."</td>
                    <td>".$row["fname"]."</td>
                    <td>".$row["lname"]."</td>
                    <td>".$row["age"]."</td>
                </tr>";
        }
        echo "</tbody></table>"; // Close the table
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
</body>
</html>