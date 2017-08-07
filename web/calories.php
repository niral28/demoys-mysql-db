<?php

require "init.php";
$u_name      = $_POST["username"];
$u_food  = $_POST["food"];
$u_calories  = $_POST["calories"];


$sql_query="INSERT INTO user_data (username, food,calories) VALUES('$u_name', '$u_food','$u_calories')";

if(mysqli_query($connection,$sql_query))
{
  $httpStatusCode = 200;
  $httpStatusMsg  = 'OK';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
  echo "successful\n";
}
else{
  $httpStatusCode = 304;
  $httpStatusMsg  = 'Not Modified';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
  echo "error\n";
}

?>
