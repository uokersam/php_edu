<?php

namespace OOPConclusion;

class MainClass extends SomeClass implements SomeInterface
{
    // The precedence order is that methods from the current class override
    // Trait methods, which in turn override methods from the base class.
    use SomeTrait;
}
