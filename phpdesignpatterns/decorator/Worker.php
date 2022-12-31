<?php

namespace patterns\decorator;

class Worker implements IWorker{
    
    public function __construct()
    {
    }

    public function doWork(): void
    {
        echo "Do work" . PHP_EOL;
    }
}