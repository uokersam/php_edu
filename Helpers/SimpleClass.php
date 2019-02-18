<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
//    throw new Exception("Unable to load $class_name");
});

class SimpleClass extends MainClass
{
    public function __construct()
    {
        parent::__construct();
        print_r("<br>SimpleClass constructor that extends parent<br>");
    }

    public $var = 'default value';

    public function displayVar()
    {
        echo $this->var;
    }

    public static function mainFunction($bool)
    {
        if ($bool === true) {
            parent::mainFunction(true);
        } elseif ($bool === false) {
            return 'main function overriden';
        }
        return '';
    }
}
