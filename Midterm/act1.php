<?php
    $strings = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        for ($i = 0; $i < 4; $i++) {
            if (!empty($_POST["str$i"])) {
                $strings[]= $_POST["str$i"];
            }
        }
    }

    if (count($strings) >= 3) {
        array_pop($strings);
        array_pop($strings);
        array_pop($strings);
    }
?>

<!DOCTYPE html>
<html>
<body>
<form method="post">
        <?php for ($i = 0; $i < 4; $i++):?>
            <label>Link <?php echo $i + 1;?> </label>
            <input type="url" name="str<?php echo $i;?>" required>
            <br>
        <?php endfor;?>
        <input type="submit" value="Submit">
</form>

        <?php if($_SERVER['REQUEST_METHOD'] == "POST"):?>
        <h3>Remaining URL:</h3>
        <ul>    
            <?php foreach (array_reverse($strings) as $string):?>
                <li><?php echo $string;?></li>
            <?php endforeach;?>
        </ul>
        <?php endif;?>
</body>
</html>
