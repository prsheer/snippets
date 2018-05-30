<?php

/*
I am trying to compare nested multidimensional arrays by value and key so my scenario is:

I need to compare two nested multidimensional arrays and find the difference in terms of their values by quantity and update those quantities but also items which are in the new array and not the old one for example:

First Array:

Array (
    [0] => Array ( [name] => hey [qty] => 3 )  
    [1] => Array ( [name] => hello [qty] => 1 )  
    [2] => Array ( [name] => test [qty] => 1 )
)

Second Array:

Array (
    [0] => Array ( [name] => hey [qty] => 5 )  
    [1] => Array ( [name] => hello [qty] => 5 )  
    [2] => Array ( [name] => PHP [qty] => 2 )
)

Desired output

Array (
    [0] => Array ( [name] => hey [qty] => 2 )  
    [1] => Array ( [name] => hello [qty] => 4 )  
    [2] => Array ( [name] => PHP [qty] => 2 )
)
*/

$firstArray = [                                                                                                                                                                                                      
    ['name' => 'hey', 'qty' => 3],                                                                                                                                                                                 
    ['name' => 'hello', 'qty'=> 1],                                                                                                                                                                                
    ['name' => 'test', 'qty' => 1]                                                                                                                                                                                 
];                                                                                                                                                                                                                 

$secondArray = [                                                                                                                                                                                                      
    ['name' => 'hey', 'qty' => 5],                                                                                                                                                                                 
    ['name' => 'hello', 'qty'=> 5],                                                                                                                                                                                
    ['name' => 'test', 'qty' => 2]                                                                                                                                                                                  
];  

function reduceQuantity($firstArray, $secondArray) {

	$arrayDifference = [];
	$newRow = [];

	foreach ($firstArray as $firstKey => $firstValue) {

		$newRow = $secondArray[$firstKey];

		if ($newRow['name'] == $firstValue['name']) {
			$arrayDifference[] = [
				'name' => $firstValue['name'],
				'qty' => $newRow['qty'] - $firstValue['qty'],
			];
		} else {
			$arrayDifference[] = $newRow[$firstKey];
		}

	}

	return $arrayDifference;

}

var_dump(reduceQuantity($firstArray, $secondArray));
/*
(array) [3 elements]
0: 
(array) [2 elements]
name: (string) hey
qty: (integer) 2 
1: 
(array) [2 elements]
name: (string) hello
qty: (integer) 4 
2: 
(array) [2 elements]
name: (string) test
qty: (integer) 1 
*/