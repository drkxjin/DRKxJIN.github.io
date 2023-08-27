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
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform authentication, e.g., check against database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Authentication successful
        // Display the image or perform any action you want after login
        echo "<p>Login successful! Here's the image:</p>";
        echo "<img src='Umer 1.jpg' alt='Image'> ";
    } else {
        // Authentication failed
        echo "Login failed. Invalid username or password.";
    }
}

$conn->close();
?>
