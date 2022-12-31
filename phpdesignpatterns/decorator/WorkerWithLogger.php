<?php

namespace patterns\decorator;

class WorkerWithLogger implements IWorker{
    private $originalWorker;
    
    public function __construct(IWorker $workerObj)
    {
        $this->originalWorker = $workerObj;   
    }

    public function doWork(): void
    {
        echo "Log worker job" . PHP_EOL;
        $this->originalWorker->doWork();
    }
}