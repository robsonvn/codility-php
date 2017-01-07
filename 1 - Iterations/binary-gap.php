<?php

function solution($N)
{
    $binary = decbin($N);
    $current_gap = $max_gap = 0;

    for ($i=0;$i<strlen($binary);$i++) {
        if ($binary[$i]==1) {
            $max_gap = max($max_gap, $current_gap);
            $current_gap = 0;
        } else {
            $current_gap++;
        }
    }

    return $max_gap;
}
