<?php

$note = 'This is note';
$magazine = 'This is note note is this';

function hrn($note, $magazine)
{
    $noteArray = explode(' ', $note);
    $magazineArray = explode(' ', $magazine);

    $noteCheck = [];

    foreach ($magazineArray as $word) {
            $noteCheck[$word]++;
    }

    $noteIsPossible = true;

    foreach ($noteArray as $word) {
        if (isset($noteCheck[$word])) {
            $noteCheck[$word]--;

            if ($noteCheck[$word] < 0) {
                $noteIsPossible = false;
            }
        } else {
            $noteIsPossible = false;
        }

    }

    return $noteIsPossible;

}

var_dump(hrn($note, $magazine));