<?php

$myArray = [3, 4, 6, 10, 11, 15];
$alicesArray = [1, 5, 8, 12, 14, 19];

function sortBySubstraction($a, $b) 
{
	return $a - $b;
}

function mergeSortedArray($myArray, $alicesArray) 
{
	$mergedArray = [];

	$currentIndexMine = 0;
	$currentIndexAlice = 0;
	$currentIndexMergedArray = 0;

	while ($currentIndexMergedArray < (count($myArray) + count($alicesArray)))
	{
		if ($currentIndexMine >= count($myArray))
		{
			$mergedArray[$currentIndexMergedArray] = $myArray[$currentIndexMine];
			$currentIndexMine++;
		} else if ($currentIndexAlice >= count($alicesArray)) 
		{
			$mergedArray[$currentIndexMergedArray] = $alicesArray[$currentIndexAlice];
			$currentIndexAlice++;
		}
	}





	return $mergedArray;
}

var_dump(mergeSortedArray($myArray, $alicesArray));