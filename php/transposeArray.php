<?php
// Start with this array
$array = array(
    'a' => array(
       1 => 'a1',
       2 => 'a2',
       3 => 'a3' 
    ),
    'b' => array(
       1 => 'b1',
       2 => 'b2',
       3 => 'b3' 
    ),
    'c' => array(
       1 => 'c1',
       2 => 'c2',
       3 => 'c3' 
    )
);

// Desired output:
/*
array(3) {
  ["a"]=>
  string(2) "a2"
  ["b"]=>
  string(2) "b2"
  ["c"]=>
  string(2) "c2"
}
*/

function transpose($array) {

  $transposedArray = [];

  foreach ($array as $firstKey => $secondArray) {

    foreach ($secondArray as $secondKey => $secondValue) {

      $transposedArray[$secondKey][$firstKey] = $secondValue;

    }
  }

  return $transposedArray;

}

var_dump(transpose($array)); 

/**
(array) [3 elements]
  1: 
    (array) [3 elements]
    a: (string) a1
    b: (string) b1
    c: (string) c1
  2: 
    (array) [3 elements]
    a: (string) a2
    b: (string) b2
    c: (string) c2
  3: 
    (array) [3 elements]
    a: (string) a3
    b: (string) b3
    c: (string) c3
*/