<?php
require 'libs/simplehtmldom/simple_html_dom.php';

$html = new simple_html_dom();
$html->load_file('http://www.minube.com/que_ver/colombia/boyaca/tunja');
$titles = $html->find('.name');
$desc   = $html->find('.description');

$counter=1;
$count =0;

$nombre = array();
$descripcion = array();

foreach ($titles as $title) {
	if (($counter%2)==0) {
		$count++;
	} else {
		$nombre[$count] = $title->innertext;
		$descripcion[$count] = $desc[$count]->innertext;
	}

	$counter++;
}

$arrlength = count($nombre);

$servername = "localhost";
$username="id986069_intersolutions";
$password="intersolutions10";
$dbname="id986069_tareas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql .= "INSERT INTO sites (name_site, description_site)
    VALUES ('$nombre[0]', '$descripcion[0]');";

for($x = 1; $x < $arrlength; $x++) {
    echo $nombre[$x];
    echo "<br>";
    echo $descripcion[$x];
    echo "</br>";
    $sql .= "INSERT INTO sites (name_site, description_site)
    VALUES ('$nombre[$x]', '$descripcion[$x]');";
}

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>