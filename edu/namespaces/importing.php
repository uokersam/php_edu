<?php

namespace foo;

//Сокращенный синтаксис импорта нескольких namespace
//use My\Full\Classname as Another, My\Full\NSname;

// это тоже самое, что и использование My\Full\NSname as NSname
//use My\Full\NSname;

// импортирование глобального класса
use ArrayObject;

// импортирование функции (PHP 5.6+)
use function My\Full\functionName;

// псевдоним функции (PHP 5.6+)
use function My\Full\functionName as func;

// импортирование константы (PHP 5.6+)
use const My\Full\CONSTANT;

// Код на PHP 7+ группирование use для нескольких классов (функций, констант)
use My\Full\{Classname, NSname, ClassC as C};

$obj = new namespace\Another; // создает экземпляр класса foo\Another

$obj = new Another; // создает объект класса My\Full\Classname
NSname\subns\func(); // вызывает функцию My\Full\NSname\subns\func

$obj = new \Another\thing; // создает объект класса Another\thing

$a = new ArrayObject(array(1)); // создает объект класса ArrayObject
// без выражения "use ArrayObject" мы создадим объект класса foo\ArrayObject
func(); // вызывает функцию My\Full\functionName
echo CONSTANT; // выводит содержимое константы My\Full\CONSTANT
