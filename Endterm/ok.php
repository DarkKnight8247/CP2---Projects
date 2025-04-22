<form method="post">
Sentence: <input type="text" name="sent"> <br> <br>
Word to Search: <input type="text" name="sea"> <br> <br>
Seperator for Implode: <input type="text" name="imp"> <br> <br>
Substring Start: <input type="number" name="star"> <br> <br>
Substring Length: <input type="number" name="len"> <br> <br>
<input type="submit" value="Analyze">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $sentence = $_POST['sent'];
    $word = $_POST['sea'];
    $im = $_POST['imp'];
    $s = $_POST['star'];
    $l = $_POST['len'];
    $ex = explode(" ", $sentence);

    echo "<strong>Original Sentence:</strong> $sentence <br>";
    echo "<strong>Length:</strong> " . strlen($sentence) . "<br>";
    echo "<strong>Lowercase:</strong> " . strtolower($sentence) . "<br>";
    echo "<strong>Uppercase:</strong> " . strtoupper($sentence) . "<br>";
    echo "<strong>Trimmed:</strong> '" . trim($sentence) . "'<br>";
    echo "<strong>Word '$word' found at position:</strong> " . strpos($sentence, $word) . "<br>";
    echo "<strong>Exploded Array:</strong> ";
    echo print_r($ex);
    echo "<br>";
    echo "<strong>Imploded with '$im':</strong> " . implode($im, $ex) . "<br>";
    echo "<strong>Substring from $s with the length $l:</strong> " . substr($sentence, $s, $l);
}
?>
