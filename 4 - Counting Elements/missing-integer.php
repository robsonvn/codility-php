<?php
function solution($A) {
    // write your code in PHP7.0
    sort($A);
    $last = 0;

    for($i=0;$i<count($A);$i++){
        if($A[$i]<=0)
            continue;
        if($A[$i]-$last>1)
         break;

        $last = $A[$i];
    }

    return $last+1;
}
