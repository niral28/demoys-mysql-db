<?php

require "init.php";
$u_name      = $_POST["name"];
$u_username  = $_POST["username"];
$u_password  = $_POST["password"];
$u_lifestyle = $_POST["lifestyle"];
$u_cweight   = $_POST["current_weight"];
$u_gweight   = $_POST["goal_weight"];

$sql_query="INSERT INTO users VALUES('$u_name', '$u_username','$u_password', '$u_lifestyle', '$u_cweight', '$u_gweight')";

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
