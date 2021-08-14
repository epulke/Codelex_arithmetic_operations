<?php

function factorialOfIntegers(int $number): int
{
    $arrayToCalculate = range(1, $number);
    return array_product($arrayToCalculate);
}

echo factorialOfIntegers(10);