<?php

require_once "../../vendor/autoload.php";

use patterns\iterator\DirIterator;

$obj = new DirIterator("/Users/denis/Desktop");

$obj->rewind();
foreach($obj as $item){
    var_dump($item);
}