<?php
include 'php/lib/insert.php';
for($x = 0; $x < $arrlength; $x++) {
  insert("INSERT INTO sites (name_site, description_site) VALUES ('$nombre[$x]', '$descripcion[$x]')");
  echo $nombre[$x];
  echo "<br>";
  echo $descripcion[$x];
  echo "</br>";
}
?>
