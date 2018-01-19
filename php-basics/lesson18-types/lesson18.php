<?php

/*
 * Дано неотрицательное целое число num. Итеративно сложите все входящие в него цифры до тех пор, пока не останется одна цифра.
 *
 * Для числа 38 процесс будет выглядеть так:
 *
 * 3 + 8 = 11
 * 1 + 1 = 2
 * Результат: 2
 *
 * src/App/Solution/Solution.php
 * Реализуйте функцию addDigits
 *
 * Пример:
 *
 * addDigits(0); // 0
 * addDigits(1); // 1
 * addDigits(9); // 9
 * addDigits(10); // 1
 * addDigits(38); // 2
 * Подсказки
 * str_split($str) - функция для разбиения строки.
 */

function addDigits($str){
	if (strlen($str) == 1){ //если в переданной переменной одна цифра - возвращаем ее, как результат
		return $str; 
		}
	$str_temp = null; //обнуляем временную переменную 
	$arr = str_split($str); //загнали в массив переданную переменную
	for ($i = 1; $i >= 0;){	
		foreach ($arr as $value) { // перебираем массив
			$str_temp = $str_temp + $value; // и суммируем значения друг с другом
			}
		if (strlen($str_temp) == 1) { //смотрим длинну результата и если он равен одной цифре возвращаем как результат функции.
			return $str_temp;
			}
		else{
			$arr = str_split($str_temp); //Загоняем в массив результат предыдучего суммирования
			$str_temp = null; //Обнуляем предыдущее суммирование
			
			}
		}
	return $str_temp;
	}

/* решение учителя ))))
* function addDigits($num)
* {
*    $result = $num;
*    while ($result >= 10) {
*        $result = array_sum(str_split((string) $result));
*    }
*
*    return $result;
* }
*/
