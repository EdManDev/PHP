<?php
$mysqli=new mysqli("localhost","demo" ,"demopass" ,"db_table");

$result=$mysqli-> query("select first_name from name");
while ($row=$result->fetch_array()) {
  echo $row[0];
}

?>

