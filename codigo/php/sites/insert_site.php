<?php
include 'php/lib/insert.php';
$sql="";
for($x = 0; $x < $arrlength; $x++) {
    echo $nombre[$x];
    echo "<br>";
    echo $descripcion[$x];
    echo "</br>";
  insert("INSERT INTO sites (name_site, description_site) VALUES ('$nombre[$x]', '$descripcion[$x]')");
}
?>
