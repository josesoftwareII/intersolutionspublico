	<!DOCTYPE HTML>
	<html lang="es">

	<head>

		<h1><title>BuenosPlanes</title></h1>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3 class="text-center text-muted">
						BUENOS PLANES
					</h3>
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#">INICIO</a>
						</li>
						<li class="dropdown pull-right open">
							<br>
						</li>
					</ul>
					<div class="list-group">
						<a href="#" class="list-group-item active">LUGARES</a>
						<div class="list-group-item">

						</div>
						<div class="list-group-item">
							<h4 class="list-group-item-heading">
								
							<?php
$servername = "localhost";
$username="id986069_intersolutions";
$password="intersolutions10";
$dbname="id986069_tareas";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name_site, description_site FROM sites";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . "<b>" . $row["name_site"] . "</b>" . "</h3>";
        echo $row["description_site"]. "<br>";
        echo "<hr></br>";
    }
} else {
    echo "0 results";
}
?>
							</h4>
						</div>
						<div class="list-group-item">
							<br>
						</div> <a class="list-group-item active"><br></a>
					</div>

					<p>
						Sitio desarrollado por InterSolutions
					</p>
				</div>
			</div>
		</div>
	</body>
	</html>
