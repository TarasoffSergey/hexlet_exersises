<?php
function binarySum ($one, $two){
	$a = bindec($one);
	$b = bindec($two);
	$result = decbin (($a + $b));
	return $result;
	}
