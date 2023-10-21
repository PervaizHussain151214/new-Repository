<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_data";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
@@ -16,20 +14,31 @@
    $marks = $_POST["marks"];
    $city = $_POST["city"];

    // Create a prepared statement
    $stmt = $conn->prepare("INSERT INTO student (name, class, rollNo, age, marks, city) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("ssssss", $name, $class, $rollNo, $age, $marks, $city);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record added successfully.";
        $insert = false;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement

    $stmt->close();
}



$servername = "localhost";
$username = "root";
$password = "";
$database = "student_data";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
</body>
</html>