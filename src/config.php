<?php
$host = "sltclothing.c0z404e2a7r7.us-east-1.rds.amazonaws.com"; // Update with actual RDS endpoint
$username = "admin";
$password = "sltclothing12345";
$database = "sltclothing"; // Your actual database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
