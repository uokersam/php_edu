<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
//    throw new Exception("Unable to load $class_name");
});

class MainClass
{

    public function __construct()
    {
        print_r("mainClass constructor");
    }

    public function __destruct()
    {
        print_r('MainClass destructor');
    }

    public $mainVar = '42';
    const CONSTANT_VARIABLE = 'constantible';

    public static function mainFunction($bool)
    {
        return 'main function completed';
    }
}
