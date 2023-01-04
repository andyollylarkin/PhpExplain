<?php

namespace patterns\factories\abstactfactory;


interface UILibFactoryInterface
{
    public function initNewWindow(): UILibInterface;
}