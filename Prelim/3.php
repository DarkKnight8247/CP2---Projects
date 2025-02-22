<?php
$data = [
    ["Apple", "Banana", "Cherry"],
    ["Dog", "Elephant", "Fox"],
    ["Guitar", "Hat", "Igloo"]
];

function displayArray($array) {
    echo "<table border='1' cellpadding='5' cellspacing='0' style='font-size: 60;'>";
    foreach ($array as $row) {
        echo "<tr>";
        foreach ($row as $item) { 
            echo "<td>$item</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

echo "<h3>Indexed Array Display</h3>";
displayArray($data);
?>