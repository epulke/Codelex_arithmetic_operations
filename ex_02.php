<?php

$numberToCheck = readline("Enter number to check: ");

if (!is_numeric($numberToCheck)) {
    echo "Your input was not number, please enter number!\nbye!";
} else if ($numberToCheck % 2 === 0) {
    echo "Even Number \nbye!";
} else if ($numberToCheck % 2 !== 0) {
    echo "Odd Number \nbye!";
} else {
    echo "bye!";
}

