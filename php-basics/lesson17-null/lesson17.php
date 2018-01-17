<?php
/*
 * 
 * Реализуйте функцию compact которая принимает на вход массив и возвращает новый, 
 * полученный удалением элементов со значением null. 
 * Ключи оставшихся элементов (тех которые не были null) должны сохраняться.
 *
 * Пример:
 *
 * compact([1, 2, null]); // [1, 2]
 * compact(['name' => 'mark', 'age' => null, 'sex' => 'yes']); // ['name' => 'mark', 'sex' => 'yes']
 * compact([2, null, '', 1, null, [], 0]); // [2, 2 => '', 1, 5 => [], 0]
 * Обратите внимание на то что в примере выше, запись [2, 2 => '', 1, 5 => [], 0] 
 * эквивалентна записи [0 => 2, 2 => '', 3 => 1, 5 => [], 6 => 0]. То есть ключи сохранены. 
 * Например в исходном массиве значение 0 находится под индексом 6 и в результирующем так же.
 * 
 */
function compactMy(array $array)
{
    // BEGIN (write your solution here)
    if (!is_array($array)){
		return;
		}
	$result = [];
	foreach ($array as  $key => $element) {		
		if (!is_null($element)) {
			$result[$key] = $element;
			}
		}
	
	return $result;
	
    // END
}

