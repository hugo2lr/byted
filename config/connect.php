<?php
$servername = "localhost";
$username = "ted";
$password = "81v9m~wR";
$dbname = "byted";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "<script> console.log('Connected successfully'); </script>";
?>
