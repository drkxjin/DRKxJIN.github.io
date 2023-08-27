<?php
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
    $email = $_POST["email"];

    // Using prepared statement to insert data
    $query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    
    if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
    }

    // Bind parameters and execute
    $stmt->bind_param("sss", $username, $password, $email);

    if ($stmt->execute()) {
        echo "<h2>Registration successful!</h2>";
        
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
