<?php

namespace patterns\factories\templatemetod;


abstract class Boiler
{
    protected string $fuel;
    protected LiquidInterface $water;

    protected bool $isBoilerBroken;

    /**
     * @param bool $isBoilerBroken
     */
    public final function __construct(bool $isBoilerBroken)
    {
        $this->isBoilerBroken = $isBoilerBroken;
    }

    public final function boil(): LiquidInterface
    {
        $this->supplyFuel();
        $this->supplyWater();
        return $this->water;
    }

    abstract protected function supplyFuel(): void;

    abstract protected function supplyWater(): void;
}