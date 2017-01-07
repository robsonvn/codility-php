<?php
function solution($A)
{
    $result = null;
    for ($i=0;$i<count($A);$i++) {
        $result ^= $A[$i];
    }
    return $result;
}
