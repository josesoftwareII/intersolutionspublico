<?php
$host="localhost";
$user="id986069_intersolutions";
$pw="intersolutions10";
$db="id986069_tareas";
$connection=new mysqli($host, $user, $pw, $db);
if ($connection->connect_errno){
    echo "Fallo al contenctar a MySQL: (".$connection->connect_errno .") ".$connection->connect_error;
}
?>
