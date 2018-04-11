<?php

function binarySearch($array, $number) {
    $middleIndex = floor(count($array) / 2);
    $middleElement = $array[$middleIndex];
    if ($middleElement === $number)
        return true;
    if ($middleElement > $number and count($array) > 1) {
        return binarySearch(array_slice($array, $middleIndex, count($array)), $number);
    } elseif ($middleElement < $number and count($array) > 1) {
        return binarySearch(array_slice($array, $middleIndex, 0), $number);
    } else {
        return false;
    }
}

var_dump(binarySearch([3, 5, 2, 7, 9, 6, 55, 4, 3], 2));