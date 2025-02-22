<?php
function calcAv($scores) {
    global $s;
    $res = array_sum($scores) / 3;
    return "The average scores of $s is $res";
}

$s = [82, 82, 96];
echo calcAv($s);
?>