<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Select & Show</title>
</head>
<body>
    <!-- Selected and show -->
    <?php
    require_once("./connect.php");

    // Tab Selected
    $sql = "SELECT id, engine, transmission, door_no, age FROM car_info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo 
          "<br/>"."THE ID:".$row["id"].
          "<br/>"."THE ENGINE IS:".$row["engine"].
          "<br/>"."THE TRANSMITION IS:".$row["transmission"].
          "<br/>"."NBR THE DOOR:".$row["door_no"].
          "<br/>"."AGE:".$row["age"].
          "<br>"."<br>";
      }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

</body>
</html>