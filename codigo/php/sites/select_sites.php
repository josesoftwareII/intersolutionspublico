<?php
include 'php/lib/select.php';
$result=select("SELECT name_site, description_site FROM sites");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class="."card-panel hoverable".">";
        echo "<img src="."http://www.imagen.com.mx/assets/img/imagen_share.png"." width=200px height=200px></img>";
        echo "<h3>" . "<b>" . $row["name_site"] . "</b>" . "</h3>";
        echo $row["description_site"]. "<br>";
        echo "</br>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
?>
