<?php

namespace patterns\factories\templatemetod;

final class ColdWater implements LiquidInterface
{
    public function getWaterTemp(): string
    {
        return "You get cold water. Temp: 25oC";
    }
}