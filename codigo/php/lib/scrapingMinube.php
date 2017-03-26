<?php
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
?>
