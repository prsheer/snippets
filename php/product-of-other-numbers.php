<?php

function getProductsOfAllIntsExceptAtIndex($intArray)
{
    if (count($intArray) < 2) {
        throw new InvalidArgumentException('Getting the product of numbers at other indices requires at least 2 numbers');
    }

    $productsOfAllIntsExceptAtIndex = [];

    // for each integer, we find the product of all the integers
    // before it, storing the total product so far each time
    $productSoFar = 1;
    for ($i = 0; $i < count($intArray); $i++) {
        $productsOfAllIntsExceptAtIndex[$i] = $productSoFar;
        $productSoFar *= $intArray[$i];
    }

    // for each integer, we find the product of all the integers
    // after it. since each index in products already has the
    // product of all the integers before it, now we're storing
    // the total product of all other integers
    $productSoFar = 1;
    for ($j = count($intArray) - 1; $j >= 0; $j--) {
        $productsOfAllIntsExceptAtIndex[$j] *= $productSoFar;
        $productSoFar *= $intArray[$j];
    }

    return $productsOfAllIntsExceptAtIndex;
}

$intArray = [3, 1, 2, 5, 6, 4];

print_r(getProductsOfAllIntsExceptAtIndex($intArray));