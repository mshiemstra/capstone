<?php
  $servername = "localhost";
  $username = "mshiemstra";
  $password = "June6187!";
  $database = "capstone";

  $conn = mysqli_connect($servername, $username, $password, $database);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>