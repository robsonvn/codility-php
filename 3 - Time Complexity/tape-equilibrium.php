<?php
function solution($A)
{
    $array_sum = array_sum($A);
    $left_sum = 0;
    $diff = 2001;

    for ($i=0;$i<count($A)-1;$i++) {
        $left_sum += $A[$i];
        $right_sum = $array_sum-$left_sum;
        $diff = min($diff, abs($right_sum-$left_sum));
    }

    return $diff;
}
