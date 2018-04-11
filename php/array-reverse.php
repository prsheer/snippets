<?php

$array = [2, 3, 5, 7];

echo 'Reverse array 2, 3, 5, 7. <br>';

function reverseArray($array)
{
    $n = count($array);

    for ($i = $n + 1; $i >= 0; $i--) {
        print_r($array[$i]);

        if ($i < $n + 1) {
            print_r(' ');
        }
    }
}

print_r(reverseArray($array));