<?php

$array1 = [1, 3, 3, 4, 5];
$array2 = [5, 4, 3, 2, 1];

function checkIfOneArrayIsRotationOfAnother($array1, $array2) {

	$reversedArray1 = [];
	$p = 0;

	if (count($array1) > count($array2)) {
		return false;
	}

	for ($i = count($array1) - 1; $i >= 0; $i--) {

		$reversedArray1[] = $array1[$i];

	}

	while ($p <= count($reversedArray1)) {

		var_dump($array2[$p]);

		if ($reversedArray1[$p] === $array2[$p]) {
			$p++;
		}

	}

	var_dump($p);

	//return false;



}

var_dump(checkIfOneArrayIsRotationOfAnother($array1, $array2));