<?php

$lowerbound = 1;
$upperbound = 100;

function sumNumbersInRange(int $numberFrom, int $numberTo): string
{
    $numberArray = range($numberFrom, $numberTo);
    $sumArray = array_sum($numberArray);
    $averageArray = $sumArray/count($numberArray);
    return "The sum of $numberFrom to $numberTo is $sumArray.\nThe average is $averageArray";
}

echo sumNumbersInRange($lowerbound, $upperbound);