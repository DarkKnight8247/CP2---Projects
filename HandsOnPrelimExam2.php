<form method="post">
    Word 1: <input type="text" name="w[]"> <br><br>
    Word 2: <input type="text" name="w[]"> <br><br>
    Word 3: <input type="text" name="w[]"> <br><br>
    Word 4: <input type="text" name="w[]"> <br><br>
    <input type="submit" name="submit">
</form>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $ow = ["", "", "", ""];
        $rw = ["", "", "", ""];

    for ($i = 0; $i < 4; $i++) {
        $ow[$i] = $_POST['w'][$i];
    }

    for ($i = 0; $i < 4; $i++) {
        $rw[$i] = strrev($ow[$i]);
    }

    echo "<h1>Original & Processed Workds:</h1>";
    for ($i = 0; $i < 4; $i++) {
        echo "Original: " . $ow[$i] . " => Processed: " . $rw[$i] . "<br>";
    }
    }
?>
