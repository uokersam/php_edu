<?php

trait SomeTrait
{
    public function someFunction()
    {
        parent::someFunction();
        echo 'trait to SomeFunciton addition';
    }
}
