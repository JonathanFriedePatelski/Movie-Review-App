<?php
$servername = "localhost";
$username = "bit_academy";
$password = "bit_academy";

try {
  $conn = new PDO("mysql:host=$servername;dbname=movie_reviews", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 