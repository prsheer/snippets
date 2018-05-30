<?php

/*

Example:

Input:

$input = array('Orange','Apple','Banana');

Expected Output:

$output = array(
    'name' => 'Banana',
    'sub_category' => array(
         'name' => 'Apple',
         'sub_category' => array(
             'name' => 'Orange'
);

*/

$array = ['Orange', 'Apple', 'Banana'];

function convertSingleToNestedArray($array, $result = []) {

    $result = ['name' => array_pop($array)];

    if (count($array)) {
        $result['sub_category'] = convertSingleToNestedArray($array, $result);
    }

    return $result;
}

function d($v) {
    return var_dump($v);
}

d(convertSingleToNestedArray($array));