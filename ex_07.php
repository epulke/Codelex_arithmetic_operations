<?php

function fallingObjectPosition(float $time, float $initialVelocity = 0, float $initialPosition = 0): float
{
    return 0.5 * -9.81 * pow($time, 2)+ $initialVelocity + $initialPosition;
}

echo fallingObjectPosition(10);