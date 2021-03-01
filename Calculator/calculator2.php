<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2']; // This is the item from an input-field with that name as an attribute
$operator = $_GET['operator'];

$sum =0;

if ($operator == '+') {
    $sum = $num1 + $num2;
} elseif ($operator == '-') {
    $sum = $num1 - $num2;
} elseif ($operator == '*') {
    $sum = $num1 * $num2;
} elseif ($operator == '/') {
    $sum = $num1 / $num2;
}


echo("<h1>$num1 $operator $num2 = $sum </h1>");


