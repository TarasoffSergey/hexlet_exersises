<?php
/*
 * Реализуйте рекурсивную функцию factorial, используя линейно-рекурсивный процесс.
 *
 * Факториал числа можно выразить следующим образом:
 *
 * factorial(0) -> 1
 * factorial(1) -> 1
 * factorial(n) -> n * factorial(n - 1)
 * 
 * 
 * Пример:
 *
 *
 *   6 === factorial(3); // true
 *   120 === factorial(5); // true
 *   3628800 === factorial(10); // true
 */
 
function factorial($num)
{
    // BEGIN (write your solution here)
    if ($num == 0 || $num == 1){
		return 1;
		}
	return $num * factorial($num - 1);
    // END
}


echo factorial(5) . "\n";

/* Реализуйте рекурсивную функцию fib, находящую числа Фибоначчи, используя древовидно-рекурсивный процесс.
 *
 * Формула:
 *
 * f(0) = 0
 * f(1) = 1
 * f(n) = f(n-1) + f(n-2)
 * Пример:
 *
 * <?php
 *   2 === fib(3); // true
 *   5 === fib(5); // true
 *   55 === fib(10); // true
 * >
 */
function fib($num)
{
    // BEGIN (write your solution here)
    if ($num == 0){
		return 0;
	}
	if ($num == 1 || $num == 2 ){
		return 1;
	}
	else {
	return fib($num - 1) + fib($num - 2);
	}
    // END
}

echo fib(6);
