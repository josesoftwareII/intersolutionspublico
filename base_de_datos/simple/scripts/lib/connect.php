<?php
$host="";
$user="";
$pw="";
$db="";
$connection=new mysqli($host, $user, $pw, $db);
if ($connection->connect_errno){
    echo "Fallo al contenctar a MySQL: (".$connection->connect_errno .") ".$connection->connect_error;
}
?>
