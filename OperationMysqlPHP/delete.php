<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delete into Table by ID</title>
</head>
<body>

    <!-- Delete a row into a Table by ID -->
    <?php
    require_once("./connect.php");

    // sql to delete a row by ID
    $sql = "DELETE FROM car_info WHERE id=2";

    if ($conn->query($sql) === TRUE) {
        echo "the row was deleted successfully in the tab";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();

    ?>
</body>
</html>

