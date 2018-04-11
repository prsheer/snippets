<?php

$string = 'aabba';

function isPalindrome($string) 
{
	$reversed = '';
	$i = 0;

	while(!empty($string[$i])) {
		$reversed = $string[$i].$reversed;
		$i++;
	}

	return ($reversed === $string) ? true : false; 
}

var_dump(isPalindrome($string));