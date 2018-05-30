<?php

$file = fopen("config.txt", "r");
$array = [];
var_dump(createArrayFromFile($file, $array));
fclose($file);

function createArrayFromFile($file, $array) {

    while (!feof($file)) {
        $line = fgets($file);
        $line = trim($line);

        if ($line == "") continue;

        if (strpos($line, '{') !== false) {
            $line = trim(str_replace('{', '', $line));
            $array[$line] = [];
            $array[$line] = createArrayFromFile($file, $array[$line]);
        } elseif (strpos($line, '}') !== false) {
            return $array;
        } else {
            $line = str_replace(';', '', $line);
            $key = strtok($line, ' ');
            $value = strtok(' ');
            $array[$key] = $value;
        }
    }

    return $array;
}