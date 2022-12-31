<?php

require_once "../../vendor/autoload.php";



$worker = new patterns\decorator\Worker();
$workerLogger = new patterns\decorator\WorkerWithLogger(new patterns\decorator\Worker());

$worker->doWork();
$workerLogger->doWork();