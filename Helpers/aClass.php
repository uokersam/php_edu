<?php

class A
{
    public function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ')\n';
        } else {
            echo '$this is not defined.\n';
        }
    }
}
