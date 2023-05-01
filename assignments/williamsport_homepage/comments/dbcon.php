<?php
$servername = "localhost";
$username = "gdc2964";
$password = "Upset7%hominidae";
$db = "gdc2964";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
