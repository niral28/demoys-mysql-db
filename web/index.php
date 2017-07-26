<?php

$db_name="diet";
$mysql_user="root";
$server_name="localhost";
$connection=mysqli_connect($server_name,$mysql_user,"",$db_name);
if(!$connection){
  echo "Connection not successful";
  $httpStatusCode = 200;
  $httpStatusMsg  = 'OK';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
}
else{
   echo "connection successful\n";
   $httpStatusCode = 304;
   $httpStatusMsg  = 'Not Modified';
   header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
}

?>
