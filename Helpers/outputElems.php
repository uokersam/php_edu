<?php

function outputElems($data)
{
    foreach ($data as $item) {
        echo $item['text'] . '<br>';
    }
}