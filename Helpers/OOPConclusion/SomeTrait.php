<?php

namespace OOPConclusion;

trait SomeTrait
{
    public function someFunction()
    {
        parent::someFunction();
        echo 'trait to SomeFunciton addition';
    }
}
