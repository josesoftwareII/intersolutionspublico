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
									include 'php/sites/select_sites.php';
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
