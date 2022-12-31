<?php

use patterns\singleton\Singleton;

require_once "../../vendor/autoload.php";

$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

var_dump($singleton === $singleton2);