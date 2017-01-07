<?php
function solution($A)
{
    sort($A);
    $next=1;
    $i = 0;
    while ($next===$A[$i]) {
        $next++;
        $i++;
    }

    return $next;
}
