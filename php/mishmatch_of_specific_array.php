<?php

/**
$ar = ['01-05-24-30-35-36', '25-27-32-34-37-42', '11-17-18-22-33-41'];
$ar2 = ['01-05-24-30-35-36', '05-30-01-36-35-24', '01-05-24-30-35-33'];

Find mismatch if any of numbers are missing in a array
*/

$originalArray = ['01-05-24-30-35-36', '25-27-32-34-37-42', '11-17-18-22-33-41'];
$arrayToCheck = ['01-05-24-30-35-36', '05-30-01-36-35-24', '01-05-24-30-35-33'];

function checkIfArrayContainsSameNumbers($originalArray, $arrayToCheck, $delimiter = '-') {

	foreach ($originalArray as $key => $item) {
		$originalArray[$key] = explode($delimiter, $item);
		sort($originalArray[$key]);
	}

	foreach ($arrayToCheck as $key => $item) {
		$item = explode($delimiter, $item);
		sort($item);

		$result[$arrayToCheck[$key]] = false;

		if (array_search($item, $originalArray) !== false) {
			$result[$arrayToCheck[$key]] = true;
		}
	}

	return $result;
}

var_dump(checkIfArrayContainsSameNumbers($originalArray, $arrayToCheck));

// Result: 
// array(3) { ["01-05-24-30-35-36"]=> bool(false) ["05-30-01-36-35-24"]=> bool(false) ["01-05-24-30-35-33"]=> bool(false) }

/*
(array) [3 elements]
01-05-24-30-35-36: (boolean) false 
05-30-01-36-35-24: (boolean) false 
01-05-24-30-35-33: (boolean) false 
*/