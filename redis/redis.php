<?php
require_once __DIR__ . '/../vendor/autoload.php';

Predis\Autoloader::register();

$client = new Predis\Client();

$client->set('bar', 'baz');
