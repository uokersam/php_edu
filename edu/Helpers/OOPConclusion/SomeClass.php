<?php

namespace OOPConclusion;

class SomeClass
{
    public static function someFunction()
    {
        echo 'SomeClass\'s some function';
    }

    const SOME_CONST = 4;
    private static $someVar = 'some var';

    //prevents child classes from overriding a method
    final public static function finalFunc()
    {
        echo "SomeClass::finalFunc() called also has private variable: "
            . self::$someVar;
    }
}
