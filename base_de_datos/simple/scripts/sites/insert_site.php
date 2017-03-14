<?php
include '../lib/insert.php';

$arrlength=$_REQUEST['arrlength'];
$nombre=$_REQUEST['nombre'];
$descripcion=$_REQUEST['descripcion'];

for($x = 0; $x < $arrlength; $x++) {
    echo $nombre[$x];
    echo "<br>";
    echo $descripcion[$x];
    echo "</br>";
    $sql .= "INSERT INTO sites (name_site, description_site)
    VALUES ('$nombre[$x]', '$descripcion[$x]');";
}
insert($sql);
?>
