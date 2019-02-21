<?php
/**
 * checks if all values in array are smaller or equal to $limit
 * @param array   $a
 * @param integer $limit
 *
 * @return boolean
 */
function smallEnough(array $a, int $limit)
{
    foreach ($a as $item) {
        if ($item > $limit) {
            return false;
        }
    }

    return true;
}
