<?php
include_once('./Helpers/countRedBeads.php');
include_once('./Helpers/balance.php');
include_once('./Helpers/expandedForm.php');
echo('<br> $_SERVER[\'PATH_INFO\'] is: ' . $_SERVER['PATH_INFO'] . '<br>');
// if url accessed by http://localhost:8000/foo/bar then value is '/foo/bar'

var_dump(balance('!!??', '???!!'));

echo '<hr><h1 style="font-family: sans-serif;">new function</h1><br>';

echo '<hr>';

// escaping strings
$some = 'sdfsdf';
// the variable is still interpolate even if '' inside of "" as " '$var' "
$valueOfSome = "the variable of '$some' is $some";
// to get expected behavior we need to escape the dollar sign
echo "\$some is: $some";
