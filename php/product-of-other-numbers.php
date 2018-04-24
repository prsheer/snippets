<?php
$intArray = [1, 2, 6, 5, 9];
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
        // [1, 1, 7, 21]
        $productsOfAllIntsExceptAtIndex[$i] = $productSoFar;

        $productSoFar *= $intArray[$i];
    }

    //echo '<pre>'; print_r($productsOfAllIntsExceptAtIndex); echo '</pre>';
        $productsOfAllIntsExceptAtIndex[$i] = $productSoFar;
        $productSoFar *= $intArray[$i];
    }

    // for each integer, we find the product of all the integers
    // after it. since each index in products already has the
    // product of all the integers before it, now we're storing
    // the total product of all other integers
    $productSoFar = 1;
    for ($j = count($intArray) - 1; $j >= 0; $j--) {

        //echo '<pre>'; print_r($productsOfAllIntsExceptAtIndex); echo '</pre>';
        $productsOfAllIntsExceptAtIndex[$j] *= $productSoFar;
        $productSoFar *= $intArray[$j];
    }

    return $productsOfAllIntsExceptAtIndex;
}

echo '<pre>'; print_r(getProductsOfAllIntsExceptAtIndex($intArray)); echo '</pre>';

/*
function getSumForProducts($intArray) {

    $sum = 1;
    $sumArray = [];
    for($i = 0; $i < count($intArray); $i++) {
        for($j = 0; $j < count($intArray); $j++) {
            if ($i == $j)
            $sumArray[] = $intArray[$i] * $intArray[$j];
        }
    }

    return ($sumArray);
}
*/

//echo '<pre>' . print_r(getSumForProducts($intArray)) . '</pre>';
$intArray = [3, 1, 2, 5, 6, 4];

print_r(getProductsOfAllIntsExceptAtIndex($intArray));
