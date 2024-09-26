<?php
date_default_timezone_set('America/Toronto');
date_default_timezone_set('America/Los_Angeles');

$currentHour = date('H');

$currentHour = (int) $currentHour;

switch (true) {
    case ($currentHour >= 5 && $currentHour < 9):
        echo "It's breakfast time! The animals should eat Bananas, Apples, and Oats.";
        break;
    case ($currentHour >= 12 && $currentHour < 14):
        echo "It's lunch time! The animals should eat Fish, Chicken, and Vegetables.";
        break;
    case ($currentHour >= 19 && $currentHour < 21):
        echo "It's dinner time! The animals should eat Steak, Carrots, and Broccoli.";
        break;
    default:
        echo "The animals are not being fed at this time.";
        break;
}
?>