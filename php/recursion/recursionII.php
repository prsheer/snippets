<?php

function printCombinations($array, $start = 0, $preText = "") {
    for($i = $start; $i < count($array); $i++) {
        echo $preText . $array[$i] . "\n";
        if(($i+1) < count($array))
            printCombinations($array, $i+1, $preText . $array[$i]);
    }
}

function d($v) {
    return var_dump($v);
}

d(printCombinations(array('a','b','c','d','e')));

//a ab abc abcd abcde abce abd abde abe ac acd acde ace ad ade ae b bc bcd bcde bce bd bde be c cd cde ce d de e NULL