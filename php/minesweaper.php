<?php

function mineSweaper($bombs, $numberOfRows, $numberOfColumns) {

    $field = [];

    foreach ($bombs as $bomb) {

        $rowIndex = $bomb[0];
        $columnIndex = $bomb[1];

        $field[$rowIndex][$columnIndex] = -1;

        for ($i = $rowIndex - 1; $i < $rowIndex + 2; $i++) {

            for ($j = $columnIndex - 1; $j < $columnIndex + 2; $j++) {

                if (0 <= $i && $j < $rowIndex && 0 <= $j && $j < $numberOfColumns && $field[$i][$j] != -1) {

                    $field[$i][$j] += 1;

                }

            }

        }

        return $field;

    }

}

$bombs = [
    [0, 1, -1],
    [1, 21, 1],
    [-1, 1, 0]
];

var_dump(mineSweaper($bombs, 3, 3));
