<?php

namespace evdispatch;

use evdispatch\Sensor;
use Symfony\Contracts\EventDispatcher\Event;

final class TemperatureIncreaseEvent extends Event
{
    public const EVENT_NAME = 'temp_increase';
    private Sensor $sensor;

    public function __construct(Sensor $sensor)
    {
        $this->sensor = $sensor;
    }

    public function getSensor(): Sensor
    {
        return $this->sensor;
    }
}