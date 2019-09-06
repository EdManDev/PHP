<!-- Create Table into the BD -->
<title>Create Table into the BD </title>
<?php
require_once("./connect.php");

$sql = "CREATE TABLE cliente (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  estado_civil VARCHAR(30) NOT NULL,
  limite_de_credito VARCHAR(30) NOT NULL,
  fecha_de_registro VARCHAR(50),
  nombre VARCHAR(50),
  email VARCHAR(50),
  gender VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
      echo "Table <b>cliente</b> was created successfully";
  } else {
      echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
?>