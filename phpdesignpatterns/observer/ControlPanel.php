<?php

namespace patterns\observer;


use SplSubject;

/**
 * Контрольная панель. (Наблюдает за датчиком)
 */
final class ControlPanel implements \SplObserver
{
    private string $panelName;

    public function __construct(string $panelName)
    {
        $this->panelName = $panelName;
    }

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject): void
    {
        /**
         * @var TemperatureSensor $sub
         */
        $sub = $subject;
        echo "Report from " . $this->panelName . '.' . "Temperature on sensor will change. Now temperature is: " . $sub->getCurrentTemp() . PHP_EOL;
    }
}