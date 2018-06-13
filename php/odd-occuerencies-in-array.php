<?php


function solution () {
	$array =  [9, 3, 9, 3, 9, 7, 9];

	$newArray = [];


	foreach ($array as $key => $value) {

	    if (!isset($newArray[$value])) {

	        $newArray[$value] = 1;

	    } else if ($newArray[$value]) {

	        unset($newArray[$value]);

	    }

	}

	return (key($newArray));
}
