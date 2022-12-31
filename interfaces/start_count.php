<?php

include_once "../vendor/autoload.php";

use interfaces\HundredCountable;

$oh = new HundredCountable();
var_dump(count($oh));