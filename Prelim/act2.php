<?php 
    function displayCities($cities) {
        echo "Searchable City: <ol>";
        foreach ($cities as $city) {
            echo "<li>$city City</li>";
        }
        echo "</ol>";
    }

    function searchCity($cities, $search) {
        $index = in_array($search, $cities);

        if ($index !== false) {
        echo "<p>$search City is available for visit.</p>";
    } else {
        echo "<p>$search City is not on the list</p>";
    }
    }

    $cities = ["Cadiz", "Sagay", "Bacolod", "Silay", "Talisay"];
    displayCities($cities);

    $search = "Oudufweo";
    searchCity($cities, $search);
?>