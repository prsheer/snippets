<?php


$array = [4, 2, 55, 7, 44, 5, 2, 77, 898, 4, 22, 3, 4, 21, 4];


function mostFrequentlyOccuringItemInArray($array)
{

	$store = [];
	$count = 0;

	for ($i = 0; $i < count($array); $i++) {
		$store[$array[$i]]++;
	}

	$max = 0;

	foreach ($store as $key => $value) {

		if ($max < $value) {
			$max = $value;
		}

	}

	return $max;

}

var_dump(mostFrequentlyOccuringItemInArray($array));