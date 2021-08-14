<?php

$numberToGuess = rand(1,100);

$guess = (int) readline("I'm thinking of a number 1-100. Try to guess it.\n");

if ($guess === $numberToGuess) {
    echo "You guessed it! What are the odds?!?";
} elseif ($guess > $numberToGuess) {
    echo "Sorry, you are too high. I was thinking of {$numberToGuess}.";
} else {
    echo "Sorry, you are too low. I was thinking of {$numberToGuess}";
}