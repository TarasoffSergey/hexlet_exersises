<?php
/*
 * Реализуйте функцию evenSquareSum, которая принимает на вход массив и возвращает сумму квадратов четных чисел.
 *
 * [1, 2, 3, 8]; // 2^2 + 8^2 = 68
 */

function evenSquareSum($arr){
	$result = array_filter($arr, function ($item){
		return $item % 2 == 0;
	});
	
	$result = array_map(function($item){return $item ** 2;}, $result);
	
	return array_sum($result);
}

echo (evenSquareSum([1, 2, 3, 8]));
