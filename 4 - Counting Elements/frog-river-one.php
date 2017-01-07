<?php
function solution($X, $A)
{
    $A = array_unique($A);
    $array_sum = $max_time = 0;

    foreach ($A as $key => $value) {
        $array_sum += $value;
        $max_time = max($max_time, $key);
    }
    $expected_sum = $X*($X+1)/2;
    $result = ($expected_sum === $array_sum) ?  $max_time : -1;

    return $result;
}
