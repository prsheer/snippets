<?php

$number = 220;

function fizzBuzz($number) {
    for ($i = 1; $i <= $number; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo $i . ' - FizzBuzz<br>';
        } else if ($i % 3 === 0) {
            echo $i . ' - Fizz<br>';
        } else if ($i % 5 === 0) {
            echo $i . ' - Buzz<br>';
        }
    }
}

fizzBuzz($number);