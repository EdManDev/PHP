<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "car";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  exit("Cannot to connect to database");
}
// echo "Connected successfully.";


?>