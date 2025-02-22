
<?php
$dataArray = ["", "", "", ""];

function displayData($array) {
    echo "<h3>Collected Data:</h3>";
    foreach ($array as $index => $value) {
        echo "Input " . ($index + 1) . ": " . htmlspecialchars($value) . "<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    for ($i = 0; $i < 4; $i++) {
        if (!empty($_POST["data" . $i])) {
            $dataArray[$i] = trim($_POST["data" . $i]);
        } else {
            $dataArray[$i] = "N/A";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>

    <h2>Enter Any String</h2>
    <form method="post" action="">
        Input 1: <input type="text" name="data0" required><br><br>
        Input 2: <input type="text" name="data1" required><br><br>
        Input 3: <input type="text" name="data2" required><br><br>
        Input 4: <input type="text" name="data3" required><br><br>
        <input type="submit" value="submit">
    </form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        displayData($dataArray);
    }
?>
</body>
</html>
