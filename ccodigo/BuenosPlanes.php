	<!DOCTYPE HTML>
	<html lang="es">

	<head>

		<title><h1>BuenosPlanes</h1></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
							require 'libs/simplehtmldom/simple_html_dom.php';

							$html = new simple_html_dom();
							$html->load_file('http://www.minube.com/que_ver/colombia/boyaca/tunja');
							$titles = $html->find('.name');
							$desc   = $html->find('.description');

							$counter=1;
							$count =0;

							foreach ($titles as $title) {
								if (($counter%2)==0) {
									$count++;
								} else {
	//echo "titulo : ";
									echo "<h3>" . "<b>" . $title->innertext . "</b>" . "</h3>" ;
									echo "</br>";
	//echo "descripcion: ";
									echo $desc[$count];
									echo "<hr></br>";
								}

								$counter++;
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
					<p>
						<a class="btn" href="#"></a>
					</p>
				</div>
			</div>
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>

	</body>
	</html>