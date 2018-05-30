<?php

$graph = [];
$nodes = ['A', 'B', 'C', 'D', 'E'];

foreach ($nodes as $xNode) {
    foreach ($nodes as $yNode) {
        $graph[$xNode][$yNode] = 0;
    }
}

foreach ($nodes as $xNode) {
    foreach ($nodes as $yNode) {
        echo $graph[$xNode][$yNode] . " ";
    }
    echo "<br>";
}


$array =[1 => 10, 2 => 100, 3 => 1000, 4 => 10000];

$splArray = SplFixedArray::fromArray($array);

print_r($splArray->count());