<?php
include_once 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
//    throw new Exception("Unable to load $class_name");
});


$blade = new Blade('views', 'cache');

echo $blade->make('homepage', ['name' => 'John']);
