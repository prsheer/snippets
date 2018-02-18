<?php

$k = 5;
$a = [1, 2, 3, 4, 5, 7, 8, 9];
$n = count($a);

$i;
$j;
$temp;

for($j = 0; $j < $k; $j++) {
    for($i = 0; $i < $n - 1; $i++) {
        $temp = $a[$i];
        $a[$i] = $a[$i +1];
        $a[$i+1] = $temp;
    }
}

for($i = 0; $i < $n; $i++) {
    //print($a[$i]);

    if($i < $n - 1) {
        //print(" ");
    }
}

# Assignment: create a function that takes two parameters, array and number to rotate the left part of an array.

$array = [5, 3, 7, 99, 22, 44];
$rotate = 3;

function leftRotation($array, $rotate)
{
    $array_count = count($array);

    for ($i = 0; $i < $rotate; $i++) {
        for ($j = 0; $j < $array_count; $j++) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }

    return $array;
}

print_r(implode(" ", leftRotation($array, $rotate)));
