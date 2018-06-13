<?php


$array = [5, 3, 7, 99, 22, 44];

function leftRotate($array, $rotate) {

    for ($i = 0; $i < $rotate; $i++) {
        for ($j = 0; $j < count($array) - 1; $j++) {

            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }

    return $array;
}
var_dump(leftRotate($array, 3));


/*
function leftRotation($array, $rotate)
{
    $array_count = count($array);

    for ($i = 0; $i < $rotate; $i++) {
        for ($j = 0; $j < $array_count - 1; $j++) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }

    return $array;
}

var_dump(leftRotation($array, $rotate));
*/