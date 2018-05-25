<?php

/**
$ar = ['01-05-24-30-35-36', '25-27-32-34-37-42', '11-17-18-22-33-41'];
$ar2 = ['01-05-24-30-35-36', '05-30-01-36-35-24', '01-05-24-30-35-33'];

Find mismatch if any of numbers are missing in a array
*/

$originalArray = ['01-05-24-30-35-36', '25-27-32-34-37-42', '11-17-18-22-33-41'];
$arrayToCheck = ['01-05-24-30-35-36', '05-30-01-36-35-24', '01-05-24-30-35-33'];

function checkIfArrayContainsSameNumbers($originalArray, $arrayToCheck, $delimiter = '-') {

	$newArray = [];

	foreach ($originalArray as $key => $item) {

		$originalArray[$key] = explode($delimiter, $item);

		sort($originalArray[$key]);
	
	}
	
	foreach ($arrayToCheck as $key => $item) {

		$arrayToCheck = explode($delimiter, $item);

		sort($arrayToCheck);

		$newArray[$arrayToCheck[$key]] = false;

		if (array_search($arrayToCheck, $originalArray) !== false) {

			$newArray[$arrayToCheck[$key]] = true;

		}
	
	}
	return $newArray;
}

var_dump(checkIfArrayContainsSameNumbers($originalArray, $arrayToCheck));