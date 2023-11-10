<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mudur_kotha";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection established successfully
// echo "Connected successfully";


