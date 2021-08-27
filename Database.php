<?php
$servername = "localhost";
$username = "admin";
$password = "Admin@123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=task3", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>