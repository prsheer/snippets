<?php

function changePossibilitiesTopDown($amountLeft, $denominations, $currentIndex = 0)
{
    // base cases:
    // we hit the amount spot on. yes!
    if ($amountLeft === 0) return 1;

    // we overshot the amount left (used too many coins)
    if ($amountLeft < 0) return 0;

    // we're out of denominations
    if ($currentIndex == count($denominations)) return 0;

    echo 'checking ways to make ' . $amountLeft . ' with [' . implode(', ', array_slice($denominations, $currentIndex)) . "]<br>";

    // choose a current coin
    $currentCoin = $denominations[$currentIndex];


    // see how many possibilities we can get
    // for each number of times to use currentCoin
    $numPossibilities = 0;
    while ($amountLeft >= 0) {
        $numPossibilities += changePossibilitiesTopDown($amountLeft, $denominations, $currentIndex + 1);
        $amountLeft -= $currentCoin;
    }

    return $numPossibilities;
}

echo changePossibilitiesTopDown(4, [1, 2, 3]);