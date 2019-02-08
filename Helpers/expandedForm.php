<?php
/**
 * @param int $n
 *
 * @return string
 */
function expanded_form(int $n): string
{
    $string = strval($n);
    $arr = str_split($string);


    $length = strlen($string);

    $result = $arr[0];

    for ($i = $length; $i > 0; $i--) {
        $result .= $arr[$i];

        if ($i === 0) {
            break;
        }

        $zeros = '';

        if ($arr[$i] === '0') {
            echo ('---0-elem--');
        }

        for ($m = $i - 1; $m > 0; $m--) {
            $zeros .= '0';
        }


        $result .= $zeros . ' + ';
    }
    return $result;
}
