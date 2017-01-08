<?php

function solution($A)
{
    // write your code in PHP7.0
    $pairs = $zeros = 0;

    foreach ($A as $k => $v) {
        $zeros += ($v === 0);

        if ($v===1) {
            $pairs += $zeros;
        }

        if ($pairs>1000000000) {
            $pairs = -1;
            break;
        }
    }

    return $pairs;
}
