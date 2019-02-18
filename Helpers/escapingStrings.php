<?php

function escapingStrings()
{

// escaping strings
    $some = 'sdfsdf';
// the variable is still interpolate even if '' inside of "" as " '$var' "
    $valueOfSome = "the variable of '$some' is $some";
// to get expected behavior we need to escape the dollar sign
    echo "\$some is: $some";
}
