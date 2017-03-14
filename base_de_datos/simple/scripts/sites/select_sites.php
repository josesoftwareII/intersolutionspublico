<?php
include '../lib/select.php';
$result=select("SELECT name_site, description_site FROM sites");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . "<b>" . $row["name_site"] . "</b>" . "</h3>";
        echo $row["description_site"]. "<br>";
        echo "<hr></br>";
    }
} else {
    echo "0 results";
}
?>
