<?php
function insert($sql){
	include 'connect.php';
	$result=$connection->query($sql) or die("Error_".mysqli_error($connection));
	@mysql_close($connection);
    echo $result;
}
?>
