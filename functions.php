<?php

function myCalculator($nummer1, $oper, $nummer2) {
    $sum;
    switch ($oper) {
        case "add":
            $sum = $nummer1 + $nummer2;
            break;
        case "sub":
            $sum = $nummer1 - $nummer2;
            break;
        default:
            $sum = "There was an error!";
            break;
    }
    return $sum;
}

$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "Value: " . myCalculator($num01, $oper, $num02)

?>