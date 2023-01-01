<?php

namespace patterns\nullobject;


final class NullPrinter implements Printable
{
    public function print()
    {
        echo "Nothing" . PHP_EOL;
    }
}