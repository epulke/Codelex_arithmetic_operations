<?php

class Geometry {

    static function calculateCirceArea($radius)
    {
        if ($radius < 0) {
            throw new Exception("Error: Circle radius can only be positive number.");
        } else {
            return pi() * $radius * 2;
        }

    }

    static function calculateRectangleArea($length, $width)
    {
        if ($length < 0 || $width < 0) {
            throw new Exception("Error: rectangle length and width can only be positive numbers.");
        } else {
            return $length * $width;
        }

    }

    static function calculateTriangleArea($base, $height)
    {
        if ($base < 0 || $height < 0) {
            throw new Exception("Error: triangle base and height can only be positive numbers.");
        } else {
            return $base * $height * 0.5;
        }

    }
}

echo "Geometry calculator" . PHP_EOL;
echo PHP_EOL;
echo "Calculate the Area of Circle" . PHP_EOL;
echo "Calculate the Area of Rectangle" . PHP_EOL;
echo "Calculate the area of Triangle" . PHP_EOL;
echo "Quit" . PHP_EOL;
$geometryChoice = (int) readline("Enter your choice (1-4): ");

switch ($geometryChoice)
{
    case 1:
        $radius = (int) readline("Enter circle radius: ");
        try {
            $circleArea = Geometry::calculateCirceArea($radius);
            echo "Circle area is {$circleArea}";
        }
        catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
        break;
    case 2:
        $length = (int) readline("Enter rectangle length: ");
        $width = (int) readline("Enter rectangle width: ");
        try {
            $squareArea = Geometry::calculateRectangleArea($length, $width);
            echo "Rectangle area is {$squareArea}.";
        }
        catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
        break;
    case 3:
        $base = (int) readline("Enter triangle base: ");
        $height = (int) readline("Enter triangle height: ");
        try {
            $triangleArea = Geometry::calculateTriangleArea($base, $height);
            echo "Triangle area is {$triangleArea}.";
        }
        catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
        break;
    case 4:
        echo "Bye!";
        break;
    default:
        echo "Your selected number should be from 1 to 4.";
}