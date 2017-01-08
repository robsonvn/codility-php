<?php
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N, $A)
{
    $results = array_fill(0, $N, 0);
    $max_counter = 0;
    $last_max_counter = 0;

    for ($i=0;$i<count($A);$i++) {
        $value = $A[$i];
        if ($value <= $N) {
            $counter = $results[$value-1];
            $counter = $results[$value-1] = max($counter+1, $last_max_counter+1);
            $max_counter = max($counter, $max_counter);
        } else {
            $last_max_counter = $max_counter;
        }
    }

    foreach ($results as $k => &$v) {
        $v = max($v, $last_max_counter);
    }

    return $results;
}
