<?php

$word = 'aabcbs';

function findNonRepeatedLetter($word) {

    $countLetters = [];
    $letters = null;

    for ($i = 0; $i < strlen($word); $i++) {

        $countLetters[$word[$i]]++;

    }

    foreach ($countLetters as $key => $letterCount) {

        if ($letterCount === 1) {

            $letters .= $key;

        }

    }

    return $letters;

}

echo findNonRepeatedLetter($word);
