<?php

require "init.php";
$u_username  = $_GET["username"];


$sql_query="SELECT * from user_data where username like '" . $u_username . "'";
$result = mysqli_query($connection,$sql_query);

if($result)
{
  $httpStatusCode = 200;
  $httpStatusMsg  = 'OK';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);

  $encode = array();
  if($result->num_rows > 0){
    while($row = mysqli_fetch_assoc($result)) {
       $encode[] = $row;
    }
    //echo "results >0\n";
  }
 //echo "Connection successful\n";
 echo json_encode($encode);
}
else{
  $httpStatusCode = 304;
  $httpStatusMsg  = 'Not Modified';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
  echo "error\n";
}
?>
