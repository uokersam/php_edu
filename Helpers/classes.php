<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
//    throw new Exception("Unable to load $class_name");
});


print_r('<hr>');
echo '<h2> Classes </h2>';

$someObj = new SimpleClass();

print_r('<hr>');
