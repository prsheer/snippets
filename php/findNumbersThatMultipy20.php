<?php

/*
 * Izvuci brojeve koji zajedno daju rezultat 20
 *
 */

$array = [2, 5, 3, 6, 7, 4, 6, 10];

function returnNumbersThatMutipyGives20($array)
{
    $numbersThatMultiply20 = [];

    for ($i = 0; $i < count($array); $i++) {

        for ($j = 0; $j < count($array); $j++) {

            if ($array[$i] * $array[$j] === 20) {

                $numbersThatMultiply20[] = $array[$j];
                
            }

        }
    }

    return $numbersThatMultiply20;
}

var_dump(returnNumbersThatMutipyGives20($array));