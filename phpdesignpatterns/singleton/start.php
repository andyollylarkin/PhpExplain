<?php

require_once "../../vendor/autoload.php";

use patterns\singleton\Singleton;


$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

var_dump($singleton === $singleton2);