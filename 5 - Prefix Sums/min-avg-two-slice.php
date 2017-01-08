<?php

function solution($A)
{
    $min_avg = 9999999;
    $p = 0;

    for ($i=1;$i<count($A);$i++) {
        $sum_2 = $A[$i-1]+$A[$i];
        $avg = $sum_2/2;

        if (isset($A[$i+1])) {
            $sum_3 = $A[$i-1]+$A[$i]+$A[$i+1];
            $avg = min($avg, $sum_3/3);
        }

        if ($avg<$min_avg) {
            $min_avg = $avg;
            $p = $i-1;
        }
    }
    return $p;
}
