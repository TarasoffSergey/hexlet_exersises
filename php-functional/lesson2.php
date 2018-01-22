<?php
/*
 * «Мощность строки» — выдуманное нами понятие, которое показывает ее силу ;-). 
 * Вычисляется оно как сумма ASCII кодов букв строки.
 *
 * file: Solution.php
 * Реализуйте функцию powerOfString, которая находит мощность строки.
 *
 * Подсказки:
 * Сумма элементов массива — array_sum.
 * Преобразование строки в массив — str_split.
 * Получить ASCII код символа — ord.
 */
function powerOfString($str)
{
    // BEGIN (write your solution here)    
	return array_sum(array_map(function ($item) {return ord($item);}, str_split($str)));
    // END
}


/* решение преподавателя
 * // BEGIN
 *   $result = map(str_split($str), function ($item) {
 *       return ord($item);
 *   });
 *
 *   return array_sum($result);
    // END
*/
