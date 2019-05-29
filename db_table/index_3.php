<?php
$mysqli=new mysqli("localhost","demo" ,"demopass" ,"db_table");

$result=$mysqli-> query("select first_name from name");

dbquery($result);








function dbquery($result)
{
  while ($row=$result->fetch_array()) {
    echo $row["first_name"]. " ";
  }
}
?>

