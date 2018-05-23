<?php

/**

Convert this result: 

Array
(
    [0] => 1|1
    [1] => 1|2
    [2] => 1|3
    [3] => 1|4
    [4] => 1|5
    [5] => 1|6
    [6] => 1|32
    [7] => 1|35
    [8] => 2|1
    [9] => 2|5
    [10] => 3|1
    [11] => 3|8
    [12] => 3|11
    [13] => 3|13
    [14] => 3|35
)

to this:

Array
(
    [0] => 1|1,2,3,4,5,6,32,35
    [1] => 2|1,5
    [2] => 3|1,8,11,13,25
)

echo '<pre>' . var_export() . '</pre>';
**/

$arrayToConvert = ['1|1','1|2','1|3','1|4','1|5','1|6','1|32','1|35','2|1','2|5','3|1','3|8','3|11','3|13','3|35'];

$newArray = [];

foreach ($arrayToConvert as $item) {

    $arrayWithoutDelimiter = explode('|', $item); 

	// If $newArray with the current key already exists add new value to existing array (concatenate with a comma to existing value).
    if (isset($newArray[$arrayWithoutDelimiter[0]])) {
         
        $newArray[$arrayWithoutDelimiter[0]] = $newArray[$arrayWithoutDelimiter[0]] . ',' . $arrayWithoutDelimiter[1];

    } else { 
        // Else create new value on array.
        $newArray[$arrayWithoutDelimiter[0]] = $arrayWithoutDelimiter[0] . '|' . $arrayWithoutDelimiter[1];
    }
}

echo '<pre>' . var_export($newArray) . '</pre>'; 
// Result of $newArray: 
// array ( 1 => '1|1,2,3,4,5,6,32,35', 2 => '2|1,5', 3 => '3|1,8,11,13,35', )
