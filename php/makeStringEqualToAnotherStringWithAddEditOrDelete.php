<?php

$string1 = "abfde";
$string2 = "awfde";

function equalizeString($string1, $string2) {

    $countString1 = strlen($string1);
    $countString2 = strlen($string2);

    $letters1 = '';
    $letters2 = '';

    if ($countString1 > $countString2) {

        $biggerString = $string1;

        $isDifferenceMoreThanTwo = ($countString1 - $countString2) > 1 ? true : false;

    } else {

        $isDifferenceMoreThanTwo = ($countString2 - $countString1) > 1 ? true : false;

        $biggerString = $string2;
    }

    if ($isDifferenceMoreThanTwo) {

        return false;

    }

    for ($i = 0; $i < strlen($biggerString); $i++) {

        if ($string1[$i] !== $string2[$i]) {

            $letters1 .= $string1[$i];

        }

        if ($string2[$i] !== $string1[$i]) {

            $letters2 .= $string2[$i];

        }

    }


    if (strlen($letters1) === 1 and strlen($letters2) === 1) {

        return true;

    }


    if ($string1 === $string2) {

        return true;

    }

    return false;
}

var_dump(equalizeString($string1, $string2));
