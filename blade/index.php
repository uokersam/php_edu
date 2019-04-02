<?php
include_once '../vendor/autoload.php';
$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello {{ name }}',
    'foo'   => 'hello'
]);

$twig = new \Twig\Environment($loader);

echo $twig->render('foo', ['name' => 'Fabien']);
