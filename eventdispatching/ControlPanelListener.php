<?php

namespace evdispatch;


use Symfony\Contracts\EventDispatcher\Event;

final class ControlPanelListener
{
    /**
     * @param TemperatureIncreaseEvent $event
     * @return void
     */
    public function notifyUser(Event $event): void
    {
        echo "Temp has increased in " . $event->getSensor()->getPlaceName() . '. Now temp is: ' . $event->getSensor()->getCurrentTemp() . PHP_EOL;
    }

}