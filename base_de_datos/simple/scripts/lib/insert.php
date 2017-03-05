<?php
function insert($table,$values){
	include 'connect.php';
	//echo "INSERT INTO $table VALUES ($values)";
	$result=$connection->query("INSERT INTO $table VALUES ($values)") or die("Error_".mysqli_error($connection));
	//@mysql_close($connection);
    echo $result;
}
?>