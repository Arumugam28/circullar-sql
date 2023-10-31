<?php
// Database connection parameters
$servername = "localhost";
$username = "arumugam";
$password = "arumugam2005";
$dbname = "curriculum";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form

$facultycode = $_POST['facultycode'];
$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$pwd = $_POST['pwd'];



// Hash the password (for security)
// $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

// Insert user data into the database
$sql = "INSERT INTO teachersignup (facultycode,name,email,department, pwd) VALUES (?, ? , ? , ? , ? )";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss",$facultycode,$name,$email,$department, $pwd);

if ($stmt->execute()) {
    echo "Registration successful. <a href='arumugam.php'>Login</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
