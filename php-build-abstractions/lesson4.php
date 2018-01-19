<?php

/*
 * Реализуйте функцию $sumOfCubes, которая принимает на вход два числа и находит сумму их кубов. 
 * Воспользуйтесь уже написанной функцией возведения в куб.
 * 
 */

$cube = function ($num) {
            return $num * $num * $num;
        };

// BEGIN (write your solution here)
$sumOfCubes = function ($num1, $num2) use ($cube){
            return $cube($num1) + $cube($num2);
        };
// END

echo $sumOfCubes(5, 12) . "\n";
