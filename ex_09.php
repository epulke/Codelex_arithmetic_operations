<?php

$personsWeight = (float) readline("Enter your weight in kg: ");
$personsHeight = (int) readline("Enter your height in cm: ");

$bmi = $personsWeight / pow($personsHeight/100, 2);

if ($bmi < 18.5) {
    echo "You are underweight.";
} elseif ($bmi > 25) {
    echo "You are overweight.";
} else {
    echo "Your weight is optimal.";
}