<?php

namespace patterns\factories\templatemetod;


class CorrectBoiler extends Boiler
{
    protected function supplyFuel(): void
    {
        $this->fuel = 'gas';
    }

    protected function supplyWater(): void
    {
        $this->water = new HotWater();
    }
}