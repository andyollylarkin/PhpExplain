<?php

namespace patterns\factories\simplefactory;


final class FooFactory
{
    public static function create(): Foo
    {
        return new Foo();
    }
}