<?php

use patterns\observer\ControlPanel;
use patterns\observer\TemperatureSensor;

include "../../vendor/autoload.php";
include "./sensor_initializer.php";

$sensor = new TemperatureSensor();
$sensorBoiler = new TemperatureSensor();

$adminPanel = new ControlPanel("admin panel");
$directorPanel = new ControlPanel("director panel");
$srePanel = new ControlPanel("sre panel");

//Инициализируем датчики. При инициализации произойдет
initSensor($sensor, $adminPanel, $directorPanel, $srePanel);
initSensor($sensorBoiler, $adminPanel, $directorPanel, $srePanel);



$sensor->increateTemp(10);
$sensor->increateTemp(20);

$sensorBoiler->increateTemp(100);
$sensorBoiler->increateTemp(200);
