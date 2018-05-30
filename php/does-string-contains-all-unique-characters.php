<?php


echo 'Is Unique: Implement an algorithm to determine if a string has all unique characters. What if you
cannot use additional data structures?';

?>
<hr>
<?php

$string = 'This is';

function doesStringContainAllUniqueCharacters($string) {

    // O(n^2) approach, no additional data structures used
    // for each character, check remaining characters for duplicates
    for ( $i = 0; $i < strlen($string); $i++) {
        for ( $j = $i + 1; $j < strlen($string); $j++) {
            if ($string[$i] === $string[$j]) {
                return 'false'; // if match, return false
            }
        }
  }
  return 'true'; // if no match, return true
}

print_r(doesStringContainAllUniqueCharacters($string));
