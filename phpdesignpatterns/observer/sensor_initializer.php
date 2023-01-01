<?php

function initSensor(SplSubject $sensor, SplObserver ...$panels): void
{
    foreach ($panels as $panel) {
        $sensor->attach($panel);
    }
    echo "Sensor initialize" . PHP_EOL;
}
