<?php

$string = 'Hello There';
$newStringObject = [];
for ($i = 0; $i < strlen($string); $i++) {
        $newStringObject[$string[$i]]++;

}

$maxChar = '';
$max = 0;

foreach ($newStringObject as $letter => $number) {

    if ($max < $number) {
        $max = $number;
        $maxChar = $letter;
    }
}

var_dump($maxChar);