<?php

use patterns\nullobject\NullPrinter;
use patterns\nullobject\Printable;
use patterns\nullobject\Printer;

include_once "../../vendor/autoload.php";


enum PrinterType
{
    case BASE_PRINTER;
    case NULL_PRINTER;
}

function makePrinter($type): Printable
{
    return match ($type) {
        PrinterType::BASE_PRINTER => new Printer(),
        PrinterType::NULL_PRINTER => new NullPrinter()
    };

}

function printerUseCase(Printable $printer): void
{
    $printer->print();
}

$printer = makePrinter(PrinterType::BASE_PRINTER);

printerUseCase($printer);


$breakingPrinter = new NullPrinter();

printerUseCase($breakingPrinter);