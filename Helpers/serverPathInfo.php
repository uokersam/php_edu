<?php

function serverPathInfo()
{
    echo('<br> $_SERVER[\'PATH_INFO\'] is: ' . $_SERVER['PATH_INFO'] . '<br>');
// if url accessed by http://localhost:8000/foo/bar then value is '/foo/bar'
}