<?php
function combine_Array($keys, $values)
{
    $result = array();
    foreach ($keys as $i => $k) {
        $result[$k][] = $values[$i];
    }
    array_walk($result, create_function('$v', '$v = (count($v) == 1)? array_pop($v): $v;'));
    return    $result;
}
$array1 = array('x', 'y', 'y');
$array2 = array(10, 20, 30);
print_r(combine_Array($array1, $array2));
?>