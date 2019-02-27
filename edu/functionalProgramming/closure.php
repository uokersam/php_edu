<?php
function criteria_greater_than($min)
{
    return function ($item) use ($min) {
        return $item > $min;
    };
}

$input = [1, 2, 3, 4];

// Use array_filter on a input with a selected filter function
$output = array_filter($input, criteria_greater_than(3));

print_r($output); //items > 3
