<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("logistics", $con);

$sql="INSERT INTO income_table(income,category,description,date,time,location) VALUES('$_POST[income]','$_POST[category]','$_POST[description]','$_POST[date]','$_POST[time]','$_POST[variable]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

$message = " Income Added Succesfully";
echo "<script type='text/javascript'>alert('$message');</script>";

?>	