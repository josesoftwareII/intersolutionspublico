<?php
include '../lib/insert.php';

$id_ubicated=$_REQUEST['id_ubicated'];
$name_site=$_REQUEST['name_site'];
$cost_site=$_REQUEST['cost_site'];
$description_site=$_REQUEST['description_site'];
$link_image_site=$_REQUEST['link_image_site'];

$table="sites(id_ubicated, name_site, cost_site, description_site, link_image_site)";
$parametros="'$id_ubicated','$name_site','$cost_site','$description_site','$link_image_site'";

insert($table,$parametros);
?>
