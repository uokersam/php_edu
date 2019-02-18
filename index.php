<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
//    throw new Exception("Unable to load $class_name");
});

include_once('./Helpers/countRedBeads.php');
include_once('./Helpers/balance.php');
include_once('./Helpers/classes.php');
include_once('./Helpers/escapingStrings.php');
include_once('./Helpers/serverPathInfo.php');
