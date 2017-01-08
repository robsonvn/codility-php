<?php

function solution($A, $B, $K)
{
    $divisibles_from_0_to_a = (int) floor($A / $K);
    $divisibles_from_0_to_b = (int) floor($B / $K);

    $divisors = $divisibles_from_0_to_b - $divisibles_from_0_to_a;

    if ($A % $K === 0) {
        $divisors++;
    }

    return $divisors;
}
