<?php
/*
Write a function:

    function solution($A, $B, $K);

that, given three integers A, B and K, returns the number of integers within the range [A..B] that are divisible by K, i.e.:

    { i : A ≤ i ≤ B, i mod K = 0 }

For example, for A = 6, B = 11 and K = 2, your function should return 3, because there are three numbers divisible by 2 within the range [6..11], namely 6, 8 and 10.
*/
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A, $B, $K) {
    
    $x = $A;
    $y = $B;
    $c = $K;
    
    $checkDivision = [];
    
    for ($i = $x; $i <= $y; $i++) {
        
        if ($i % $c === 0) {
            $checkDivision[] = $i;
        }
        
    }

    return count($checkDivision);

}
