<?php
/*
 * Input:
 * $json_str = '{
    "one":
    {
        "two": 3,
        "four": [ 5,6,7]
    },
    "eight":
    {
        "nine":
        {
            "ten":11
        }
    }
}';

Output:
[
    'one/two' => 3,
    'one/four/0' => 5,
    'one/four/1' => 6,
    'one/four/2' => 7,
    'eight/nine/ten' => 11
]
 */

$json = '
{
    "one":
    {
        "two": 3,
        "four": [ 5,6,7]
    },
    "eight":
    {
        "nine":
        {
            "ten":11
        }
    }
}';

$object = json_decode($json);
$result = [];

function convertJsonToSingleArray($object, &$result, $prefix = '') {

    if (!is_array($object) && !is_object($object)) {
        $prefix = rtrim($prefix, '/');
        $result[] = $prefix . " => " . $object . "\n";

        return;
    }

    foreach ($object as $key => $value) {
        $prefix .= is_int($key) ? ($key + 1) . "/" : $key . "/";
        convertJsonToSingleArray($value, $result, $prefix);
    }

}

convertJsonToSingleArray($object, $result);

function d($v) {
    return var_dump($v);
}
d($result);