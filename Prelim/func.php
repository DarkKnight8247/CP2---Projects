<form method="post">
    Value 1: <input type="text" name="num1"> <br>
    Value 2: <input type="text" name="num2"> <br>
    <input type="Submit" value="Calc">  
</form>

<?php
    function add($x, $y) {
        $res = $x + $y;
        return $res;
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "The sum of " . $num1 . " and " .  $num2 .  " is: " . add($num1, $num2);
    }
?>