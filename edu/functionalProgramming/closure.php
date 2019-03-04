<?php
function criteria_greater_than($min)
{
    $some = $min;
    return function ($item) use ($some) {
        return $item > $some;
    };
}

$input = [1, 2, 3, 4];

// Use array_filter on a input with a selected filter function
$output = array_filter($input, criteria_greater_than(3));

print_r($output); //items > 3

//lambda function that returns reference
$lamb = function & ($param) use ($output) {
    //body
    $ref = $param . $output;

    return $ref;
};

$lamb($input);
