<?php
/**
 * check if the array contains three and two of the same values.
 * ["a", "a", "a", "b", "b"] ==> true  // 3x "a" and 2x "b"
 * ["a", "b", "c", "b", "c"] ==> false // 1x "a", 2x "b" and 2x "c"
 * ["a", "a", "a", "a", "a"] ==> false // 5x "a"
 *
 * @param array $arr
 *
 * @return boolean
 */
function checkThreeAndTwo($arr)
{
    sort($arr, SORT_STRING);

    $numberOfA = 0;
    $numberOfB = 0;
    $numberOfC = 0;

    foreach ($arr as $item) {
        // todo switch-case
        if ($item === 'a') {
            $numberOfA++;
        }
        if ($item === 'b') {
            $numberOfB++;
        }
        if ($item === 'c') {
            $numberOfC++;
        }
    }

    echo("A: $numberOfA <br>");
    echo("B: $numberOfB <br>");
    echo("C: $numberOfC <br>");

    // check if has 2 and 3 the same letters
    if ($numberOfB == 2 || $numberOfA == 2 || $numberOfC == 2) {
        if ($numberOfB == 3 || $numberOfA == 3 || $numberOfC == 3) {
            return true;
        }
        return false;
    }
    return false;
}