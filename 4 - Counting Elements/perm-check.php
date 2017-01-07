<?php
function solution($A)
{
    sort($A);
    $result = 1;

    for ($i=0;$i<count($A);$i++) {
        if ($A[$i]!==$i+1) {
            $result = 0;
            break;
        }
    }

    return $result ;
}
