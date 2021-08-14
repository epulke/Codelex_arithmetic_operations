<?php

class EmployeeSalaries {

    static function salaryCalculated(float $basepay, int $hours): float
    {
        if ($basepay < 8) {
            throw new Exception("pay is below minimum pay of 8 $.");
        } elseif ($hours > 60) {
            throw new Exception("has worked more than 60 hours.");
        }

        if ($hours <= 40) {
            return $hours * $basepay;
        } elseif ($hours > 40) {
            return 40 * $basepay + ($hours - 40) * $basepay * 1.5;
        }
    }

    static function salaryCalculatedAll(array $employeeData): string
    {
        $totalCalculations = "";
        for ($i = 0; $i < 3; $i ++) {
            try {
                $salary = self::salaryCalculated($employeeData[$i]["basepay"], $employeeData[$i]["hours"]);
                $totalCalculations .= "{$employeeData[$i]['name']} salary is EUR {$salary}.\n";
            }
            catch (Exception $e) {
                $totalCalculations .= $employeeData[$i]['name'] . " " . $e->getMessage() . PHP_EOL;
            }
        }
        return $totalCalculations;
    }
}

$employeeData = [
    [
        "name" => "Employee 1",
        "basepay" => 7.5,
        "hours" => 35
    ],
    [
        "name" => "Employee 2",
        "basepay" => 8.2,
        "hours" => 47
    ],
    [
        "name" => "Employee 3",
        "basepay" => 10,
        "hours" => 73
    ],
];

echo EmployeeSalaries::salaryCalculatedAll($employeeData);