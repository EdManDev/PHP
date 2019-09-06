<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./select.css">
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
          "<br/>"."<b>ID: </b>".$row["id"].
          "<br/>"."<b>THE ENGINE IS: </b>".$row["engine"].
          "<br/>"."<b>THE TRANSMITION IS: </b>".$row["transmission"].
          "<br/>"."<b>NBR THE DOOR: </b>".$row["door_no"].
          "<br/>"."<b>AGE: </b>".$row["age"].
          "<br>"."<br>";

          // Table Above

          $html="
            <html>
              <head></head>
              <title>some work</title>
              <body>
                <table>
                  <tr>
                    <th><b>ID:</b></th>
                    <th><b>ENGINE IS:</b></th>
                    <th><b>TRANSMITION:</b></th>
                    <th><b>NBR THE DOOR:</b></th>
                    <th><b>AGE:</b></th>
                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>2X</td>
                    <td>9</td>
                  </tr>
                  <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                    <td>2X</td>
                    <td>9</td>
                  </tr>
                  <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                    <td>2X</td>
                    <td>9</td>
                  </tr>
                </table>
              </body>
            </html>";
// foter
          $html.="
          <div><h1>footer</h1></div>
          ";
      }
    } else {
        echo "0 results";
    }
    echo $html;
    $conn->close();
    ?>

</body>
</html>