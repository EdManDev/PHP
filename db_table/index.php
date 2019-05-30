<?php
  $mysqli=new mysqli("localhost","demo" ,"demopass" ,"db_table");

  $result = $mysqli->query("SELECT first_name, last_name, product.name as purchases.name_ID and purchases.product_ID=product.ID ");

  $result_count=$mysqli->field_count;   

  $html=
  "<html>
    <head></head>
    <title>some work</title>
    <body>
      <table>
        <tr>
          <td><b>First Name</b></td>
          <td><b>Last Name</b></td>
          <td><b>Product</b></td>
          <td><b>Distribution</b></td>
          <td><b>Dateof Purchase</b></td>
        </tr>";

        while ($row = $result->fetch_array())
        { 
          $html.="<tr>";
          for($i=0;$i<$result_count;$i++)
          { 
            $html.= "<td>".$row[$i]."</td>";
          }
          $html.="</tr>";
        }
  $html.=
  "
        </table>
    </body>
</html>";

echo $html;
?>