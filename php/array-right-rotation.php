<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A, $K) {
    
    $array = $A;
    $count = count($array);
    $rotate = $K;
    
    for ($i = 0; $i < $count; $i++) {
        
        if ($i + $rotate >= $count) {
            
            $newArray[($i + $rotate) % $count] = $array[$i];
            
        } else {
            
            $newArray[$i + $rotate] = $array[$i];
            
        }
        
    }
    
    return $newArray;
}