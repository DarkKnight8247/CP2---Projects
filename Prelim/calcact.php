<form method="post">
    Number 1: <input type="text" name="num1"><br>
    Number 2: <input type="text" name="num2"><br>
    Operation:
    <select name="operator">
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
    </select><br>
    <button type="submit">Calculate</button>
</form>
<?php
function validate_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function calculate($num1, $num2, $operator) {
    switch ($operator) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Cannot divide by zero!";
            }
        default:
            return "Invalid operation selected!";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = validate_input($_POST['num1']);
    $num2 = validate_input($_POST['num2']);
    $operator = validate_input($_POST['operator']);

    if (is_numeric($num1) && is_numeric($num2)) {
        $result = calculate((float)$num1, (float)$num2, $operator);
    } else {
        $result = "Please enter valid numeric values!";
    }

    echo "Result: " . htmlspecialchars($result);
}
?>
