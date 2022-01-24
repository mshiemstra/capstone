<?php
$servername = "127.0,0.1";
$username = "mshiemstra";
$password = "June6187!";
$database = "capstone";

// Create connection
$conn = new mysqli($username, $password, $servername, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>