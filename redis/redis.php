<?php

require '../vendor/predis/predis/autoload.php';

Predis\Autoloader::register();

$redis = new Predis\Client();
