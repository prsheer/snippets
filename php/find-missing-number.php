<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    
    $array = $A;
    
    $min = 0;
    $firstItem = $array[0];
    $missingNumber = 0;
    
    foreach ($array as $element) {
        
        if ($firstItem > $element) {
            
            $min = $element;
            
        } else if ($firstItem < $element) {
            
            $max = $element;
            
        }
        
    }
    
    for ($i = $min; $i < $max; $i++) {
        
        $missingNumber = $i;    
    
    }
    
    return $missingNumber;
}

// SECOND SOLUTION

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
    
    $array = $A;
    
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = 0; $j < count($array) - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $swap = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $swap;
            }
        }        
    }
    
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] != $i + 1) {
            return $i + 1;
        }
    }
    
}