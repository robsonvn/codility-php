<?php
function solution($A, $K)
{
    if (count($A)>1 && $K>0) {
        for ($i=0;$i<$K;$i++) {
            array_unshift($A, array_pop($A));
        }
    }
    return $A;
}
