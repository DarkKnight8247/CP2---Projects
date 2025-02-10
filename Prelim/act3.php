<?php

$names = [
         ["alice", "bob", "charlie"],
         ["david", "emma", "frank"], 
         ["grace", "hank", "franx"]
];

function formatNames($array) {
    echo "<table border='1' cellpadding='20' cellspacing='5'>";
    foreach ($array as $name) {
        echo "<tr>";
        foreach ($name as $item) {
            echo "<td>";
            echo "Original: ". $item . "<br>";
            echo "Uppercase: " . strtoupper($item) . "<br>";
            echo "Reversed: " . strrev($item) . "<br>";
            echo "Capitalized: " . ucfirst($item) . "<br>";
            echo "</td>";
        }
        }
        echo "</tr>";
    }   
    echo "</table>";

formatNames($names);    
?>
