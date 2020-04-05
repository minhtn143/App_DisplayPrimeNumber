<?php
function isPrime($number)
{
    if ($number <= 2)
        return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = (int)$_REQUEST["amount"];
    $count = 0;
    $count1 = 0;

//  USE WHILE
    $n = 2;
    while ($count < $amount) {
        if (isPrime($n)) {
            echo $n . " ";
            $count++;
        }
        $n++;
    }


    echo "<br>";
// USE FOR
    for ($i = 2; $count1 < $amount; $i++) {
        if (isPrime($i)) {
            echo $i . "  ";
            $count1++;
        }
    }
}