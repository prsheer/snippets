<?php

$integer = -5;

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

	if ($integer < 0) 
	{
		return (int) $reversed * -1;
	}

	return (int) $reversed;

}

echo reverseInteger($integer);