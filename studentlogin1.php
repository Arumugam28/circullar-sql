<?php
// Database connection settings user interface
$host = "localhost";
$username = "arumugam";
$password = "arumugam2005";
$database = "curriculum";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input for username and password
$userInputregisterno = $_POST['registerno']; 
$userInputPassword = $_POST['pwd']; 

// Query the database to check if the username and password match
$sql = "SELECT * FROM studentsignup WHERE registerno = '$userInputregisterno' AND pwd = '$userInputPassword'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Username and password match, user is authenticated
    echo "Login successful!";
} else {
    // Username and password do not match, user is not authenticated
    echo "Login failed. Please check your credentials.";
}

// Close the database connection
$conn->close();
?>
