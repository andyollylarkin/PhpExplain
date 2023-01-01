<?php

namespace evdispatch;

use Symfony\Component\EventDispatcher\EventDispatcher;

final class SensorService
{
    private EventDispatcher $dispatcher;
    public function __construct(EventDispatcher $dispatcher, ControlPanelListener $listener)
    {
        $this->dispatcher = $dispatcher;
        $dispatcher->addListener(TemperatureIncreaseEvent::EVENT_NAME, [$listener, 'notifyUser']);
    }

    public function increaseSensorTemp(): void
    {
        $sensorDirector = new Sensor("Director office");
        $sensorAdmin = new Sensor("Admin office");
        $eventDirector = new TemperatureIncreaseEvent($sensorDirector);
        $eventAdmin = new TemperatureIncreaseEvent($sensorAdmin);
        $sensorDirector->increaseTemp(20);
        $sensorAdmin->increaseTemp(40);
        $this->dispatcher->dispatch($eventDirector, TemperatureIncreaseEvent::EVENT_NAME);
        $this->dispatcher->dispatch($eventAdmin, TemperatureIncreaseEvent::EVENT_NAME);
    }
}