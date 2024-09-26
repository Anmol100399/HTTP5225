<?php
function getMagicNumber($number) {
    if ($number % 3 == 0 && $number % 5 == 0) {
        return "FizzBuzz";
    } elseif ($number % 3 == 0) {
        return "Fizz";
    } elseif ($number % 5 == 0) {
        return "Buzz";
    } else {
        return $number;
    }
}

$testNumbers = [3, 5, 15, 7, 10, 30];

foreach ($testNumbers as $number) {
    echo "Input: $number -> Magic Number: " .getMagicNumber($number) . "\n";
}
?>
