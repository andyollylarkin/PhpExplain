<?php

namespace patterns\nullobject;


final class Printer implements Printable
{
    public function print()
    {
        echo "Print" . PHP_EOL;
    }
}