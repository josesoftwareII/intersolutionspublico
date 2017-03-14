<?php
function select($select){
	include 'connect.php';
	$result = $connection->query($select) or die("Error_".mysqli_error($connection));
	@mysql_close($connection);
	return $result;
}
