<?php

require "init.php";
$u_username  = $_GET["username"];


$sql_query="SELECT * from user_data where username like '$u_username'";
$result = mysqli_query($connection,$sql_query)

if($result)
{
  $httpStatusCode = 200;
  $httpStatusMsg  = 'OK';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);

  $encode = array();
  if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)) {
       $encode[] = $row;
    }
    echo json_encode($encode);
 }else {
   echo "[]"
 }
}
else{
  $httpStatusCode = 304;
  $httpStatusMsg  = 'Not Modified';
  header('Status: '.$httpStatusCode.' '.$httpStatusMsg);
  //echo "error\n";
}
?>
