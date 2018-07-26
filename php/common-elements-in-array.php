<?php

$array1 = [1, 2, 3, 5, 6, 8];
$array2 = [1, 2, 5, 7, 8, 9];

function commonElements($array1, $array2) {

	$common = [];

	for ($i = 0; $i < count($array1); $i++) {

		for ($j = 0; $j < count($array1); $j++) {

			if ($array1[$i] === $array2[$j]) {
				$common[] = $array1[$i];
			}
			
		}	
	}
	return $common;

}

function commonElementsWhile($array1, $array2) {

	$p1 = 0;
	$p2 = 0;

	$result = [];

	while ($p1 < count($array1) && $p2 < count($array2)) {
		if ($array1[$p1] == $array2[$p2]) {
			$result[] = $array1[$p1];
			$p1 += 1;
			$p2 += 1;
		} else if ($array1[$p1] > $array2[$p2]) {
			$p2 += 1;
		} else {
			$p1 += 1;
		}
	}

	return $result;

}


var_dump(commonElementsWhile($array1, $array2));