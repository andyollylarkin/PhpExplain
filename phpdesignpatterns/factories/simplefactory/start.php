<?php

include_once "../../../vendor/autoload.php";

use patterns\factories\simplefactory\FooFactory;

$foo = FooFactory::create();
$foo->foo();