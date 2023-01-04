<?php

namespace patterns\factories\abstactfactory;


final class QtFactory implements UILibFactoryInterface
{
    public function initNewWindow(): UILibInterface
    {
        return new QtWindow();
    }
}