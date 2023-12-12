<?php
// Replace with your actual database credentials
$hostname = "localhost";
$username = "root";
$password = "";
$database = "loginsignup_db";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform authentication, e.g., check against database
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Authentication successful
        // Display the image or perform any action you want after login
        echo "<h1>Login successful! Here's the Admin:</h1>";
        echo "<img src='Umer 1.jpg' alt='Image'> ";
    } else {
        // Authentication failed
        echo "Login failed. Invalid username or password.";
    }
}

$conn->close();
?>
