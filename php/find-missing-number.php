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