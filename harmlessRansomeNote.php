<?php

class RansomeNote
{
    public function hrn($magazineText, $noteText)
    {
        $magazineArray = explode(' ', $magazineText);
        $noteArray = explode(' ', $noteText);

        $words = [];

        foreach ($magazineArray as $word) {
            $words[$word]++;
        }

        $noteIsPossible = true;

        foreach ($noteArray as $word) {
            if (isset($words[$word])) {

                $words[$word]--;
                if ($words[$word] < 0) {
                    $noteIsPossible = false;
                }
            } else {
                $noteIsPossible = false;
            }
        }
        return $noteIsPossible;
    }
}

$isRansomeNoteTrue = (new RansomeNote())->hrn('This is magazine text text', 'This is magazine text texts');

var_dump($isRansomeNoteTrue);

