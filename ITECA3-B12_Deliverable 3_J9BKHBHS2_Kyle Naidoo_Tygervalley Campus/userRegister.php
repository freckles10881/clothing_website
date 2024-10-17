<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iteca3_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Register user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    
    // Perform validation (not implemented here)
    

    // Insert user data into database
    $sql = "INSERT INTO Users (first_name, last_name, password, email, dob) 
            VALUES ('$first_name', '$last_name', '$password','$email', '$dob')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>User registered successfully!</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

$conn->close();
?>