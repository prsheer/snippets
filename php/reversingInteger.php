<?php

$integer = 15;

function reverseInteger($integer) 
{
	$string = (string) $integer;
	$reversed = '';
	$i = 0;

	while(!empty($string[$i]))
	{
		$reversed = $string[$i].$reversed;
		$i++;
	}

	return (int) $reversed;

}

echo reverseInteger($integer);