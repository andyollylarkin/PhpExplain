<?php

namespace patterns\factories\templatemetod;

final class HotWater implements LiquidInterface
{
    public function getWaterTemp(): string
    {
        return "You get hot water. Temp: 85oC";
    }
}