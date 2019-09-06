<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Insert multi_query data into a table</title>
</head>
<body>
    <!-- Insert multi_query into  a table -->

    <?php
    require_once("./connect.php");

    $sql = "INSERT INTO `car_info` (id, engine, transmission, door_no, age)
    VALUES ('1', 'rotor', 'lineartronic', '4', '3');";
    $sql .= "INSERT INTO `car_info` (id, engine, transmission, door_no, age) 
    VALUES ('2', 'rotor', 'best buy', '9', '2');";

    if ($conn->multi_query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>

</body>
</html>



