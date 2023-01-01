<?php

namespace evdispatch;


final class Sensor
{
    private float $temperature;
    private string $placeName;

    public function __construct(string $placeName)
    {
        $this->temperature = 0;
        $this->placeName = $placeName;
    }

    public function increaseTemp(float $temp): void
    {
        $this->temperature += $temp;
    }

    public function getCurrentTemp(): float|int
    {
        return $this->temperature;
    }

    /**
     * @return string
     */
    public function getPlaceName(): string
    {
        return $this->placeName;
    }
}