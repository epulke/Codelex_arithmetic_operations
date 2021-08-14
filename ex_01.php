<?php

$numberOne = (int) readline("Please provide a number: ");
$numberTwo = (int) readline("Please provide another number: ");

if ($numberOne === 15 || $numberTwo === 15) {
    echo "True";
} else if ($numberTwo + $numberOne === 15) {
    echo "True";
} else if (abs($numberOne - $numberTwo) === 15) {
    echo "True";
} else {
    echo "False";
}

