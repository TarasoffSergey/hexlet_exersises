<?php
/*
 * Один из способов определения победителя в футболе это пенальти. 
 * Процесс идет так: В каждой попытке бьет игрок каждой из команд и 
 * определяется команда победитель этой попытки. Процесс продолжается 
 * до 5 попыток, хотя победитель может быть выявлен и раньше. 
 * Если после пяти попыток победитель не выявлен, то процесс продолжается 
 * до первой выигранной попытки.
 *
 *
 * Реализуйте функцию bestAttempt которая принимает на вход результаты попыток 
 * и возвращает массив со списком имен футбольных клубов, 
 * которые победили в каждой из попыток. Если результатом попытки была ничья, 
 * то в результирующем массиве она не фигурирует (потому что никто не победил).
 *
 * Пример:
 *
 * $firstClubAttempts = [['name' => 'milan', 'scored' => 1], ['name' => 'milan', 'scored' => 0]];
 * $secondClubAttempts = [['name' => 'porto', 'scored' => 1], ['name' => 'porto', 'scored' => 1]];
 * 
 * ['porto'] == bestAttempt($firstClubAttempts, $secondClubAttempts);
 * Подсказки:
 * 
 * array_map сохраняет ключи. Чтобы их сбросить, используйте array_values
 */

function bestAttempt($firstClubAttempts, $secondClubAttempts){
	$firstClubAttemptsTemp = array_values($firstClubAttempts);
	print_r($firstClubAttemptsTemp);
	$secondClubAttemptsTemp = array_values($secondClubAttempts);
	$result = array_map(null, $firstClubAttemptsTemp, $secondClubAttemptsTemp);
	print_r($result);
	
}

$firstClubAttempts = [['name' => 'milan', 'scored' => 1], ['name' => 'milan', 'scored' => 0]];
$secondClubAttempts = [['name' => 'porto', 'scored' => 1], ['name' => 'porto', 'scored' => 1]];
 
echo bestAttempt($firstClubAttempts, $secondClubAttempts);

