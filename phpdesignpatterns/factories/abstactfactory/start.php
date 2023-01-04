<?php

use patterns\factories\abstactfactory\DesktopClient;
use patterns\factories\abstactfactory\GtkFactory;
use patterns\factories\abstactfactory\QtFactory;

include_once "../../../vendor/autoload.php";

$gtkFactory = new GtkFactory();
$qtFactory = new QtFactory();

$systemUIConfig = 'qt';

switch ($systemUIConfig) {
    case 'gtk':
        $desktopClient = new DesktopClient($gtkFactory);
        break;
    case 'qt':
        $desktopClient = new DesktopClient($qtFactory);
        break;
}

$desktopClient->openWindow();



