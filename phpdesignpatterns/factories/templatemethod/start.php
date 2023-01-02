<?php

include_once "../../../vendor/autoload.php";

use patterns\factories\templatemetod\Boiler;
use patterns\factories\templatemetod\BrokenBoiler;
use patterns\factories\templatemetod\CorrectBoiler;



function repairBoiler(): Boiler
{
    return new CorrectBoiler(false);
}

$boiler = new BrokenBoiler(true);
var_dump($boiler->boil()->getWaterTemp());
$boiler = repairBoiler();
var_dump($boiler->boil()->getWaterTemp());