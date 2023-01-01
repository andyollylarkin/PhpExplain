<?php

use evdispatch\ControlPanelListener;
use evdispatch\SensorService;
use Symfony\Component\EventDispatcher\EventDispatcher;

include_once "../vendor/autoload.php";

$dispatcher = new EventDispatcher();
$listener = new ControlPanelListener();
$service = new SensorService($dispatcher, $listener);
$service->increaseSensorTemp();
