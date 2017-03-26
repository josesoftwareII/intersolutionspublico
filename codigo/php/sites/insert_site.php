<?php
include 'php/lib/insert.php';
include 'php/lib/utilities.php';
for($x = 0; $x < $arrlength; $x++) {
  insert("INSERT INTO sites (name_site, description_site) VALUES ('".rtrim(ltrim($nombre[$x]))."', '".point($descripcion[$x])."')");
  echo $nombre[$x];
  echo "<br>";
  echo $descripcion[$x];
  echo "</br>";
}
?>
