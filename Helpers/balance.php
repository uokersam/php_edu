<?php

/**
 * ! weight is 2, ? weight is 3
 * function checks if weight of 2 sides are balanced (equal)
 *
 * @param string $l
 * @param string $r
 *
 * @return string
 */

function balance(string $l, string $r): string
{
    // 1. count weight of left side
    $leftExcl = substr_count($l, '!');
    $leftQest = substr_count($l, '?');
    $leftWeight = $leftExcl * 2 + $leftQest * 3;

    // 2. count weight of right side

    $rightExcl = substr_count($r, '!');
    $rightQest = substr_count($r, '?');
    $rightWeight = $rightExcl * 2 + $rightQest * 3;


    // 3. compare sides and return boolean
    if ($leftWeight > $rightWeight) {
        return 'Left';
    } else {
        if ($rightWeight > $leftWeight) {
            return 'Right';
        }
    }

    return 'Balance';
}
