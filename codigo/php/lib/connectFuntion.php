<?php
function conn(){
  include 'connect.php';
  if ($connection->connect_errno){
      return "Error";
  }else {
    return "OK";
  }
}
?>
