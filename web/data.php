<?php

require "init.php";
$u_username  = $_GET["username"];


$sql_query="SELECT * from user_data where username like '$u_username'";
echo "'$u_username'"
$encode = array();

while($row = mysqli_fetch_assoc($sql_query)) {
   $encode[] = $row;
}

echo json_encode($encode);

if(mysqli_query($connection,$sql_query))
{
  $httpStatusCode = 200;
  $httpStatusMsg  = 'OK';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
  //echo "successful\n";
}
else{
  $httpStatusCode = 304;
  $httpStatusMsg  = 'Not Modified';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
  //echo "error\n";
}
?>
