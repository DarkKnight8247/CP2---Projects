<form method="post">
    Search for Fruit price: <br>
    <input type="text" name="nam">
    <input type="submit" value="Search">
</form>

<?php 
function displayFruits($fruits) {
    echo "<h3>Available Friuts:</h3><ul>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";
}

function findPrice($fruits, $prices, $searchFruit){
    $index = array_search($searchFruit, $fruits);

    if ($index !== false) {
        echo "<p><strong>Price Check:</strong> The price of $searchFruit is $" . number_format($prices[$index], 2) . " per piece.</p>";
    } else {
        echo "<p><strong>Price Check:</strong> Sorry the price for $searchFruit is unavailable.</p>";
    }
}

$fruits = ["Apple", "Banana", "Orange", "Mango", "Grape", "Lemon"];
$price = [2.00, 0.50, 1.00, 1.50, 2.50, 5.00];

displayFruits($fruits);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
$searchFruit = $_POST['nam'];

findPrice($fruits, $price, $searchFruit);
}
?>