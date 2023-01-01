<?php

namespace patterns\observer;


use SplObserver;

/**
 * Температурный датчик. (Наблюдаемый)
 */
final class TemperatureSensor implements \SplSubject
{
    private \SplObjectStorage $storage;
    private float $temperature;
    public function __construct()
    {
        $this->storage = new \SplObjectStorage();
        $this->temperature = 0;
    }

    public function increateTemp(float $temp)
    {
        $this->temperature += $temp;
        $this->notify();
    }

    public function getCurrentTemp(): float|int
    {
        return $this->temperature;
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer): void
    {
        $this->storage->attach($observer);
        echo "Now observers " . count($this->storage) . PHP_EOL;
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer): void
    {
        $this->storage->detach($observer);
        echo "Now observers " . count($this->storage) . PHP_EOL;
    }

    /**
     * @inheritDoc
     */
    public function notify(): void
    {
        /**
         * @var SplObserver $value
         */
        foreach ($this->storage as $value) {
            $value->update($this);
        }
    }
}