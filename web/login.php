<?php

require "init.php";

$u_name=$_POST["username"];
$u_password=$_POST["password"];
$sql_query = "SELECT username, password from users where username='$u_name' and password='$u_password'";
$result=mysqli_query($connection,$sql_query);

if($result->num_rows > 0){
  $httpStatusCode = 200;
  $httpStatusMsg  = 'OK';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
  echo "successful log in\n";
}else{
  $httpStatusCode = 304;
  $httpStatusMsg  = 'Not Modified';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
  echo "error: no user exists\n";
}
?>
