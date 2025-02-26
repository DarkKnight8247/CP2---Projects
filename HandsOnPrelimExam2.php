<form method="post">
    Word 1: <input type="text" name="w[]"> <br><br>
    Word 2: <input type="text" name="w[]"> <br><br>
    Word 3: <input type="text" name="w[]"> <br><br>
    Word 4: <input type="text" name="w[]"> <br><br>
    <input type="submit" name="submit">
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $w = ["", "", "", ""];

    for ($i = 0; $i < 4; $i++) {
        $w[$i] = $_POST['w'][$i];
    }

    echo "<h1>Original & Processed Workds:</h1>";
    foreach ($w as $index => $word){
        echo "Original: $word => Processed: " . strrev($word) . "<br>";
    }
    }
?>
