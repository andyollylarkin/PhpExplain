<?php

namespace patterns\factories\abstactfactory;


final class GtkFactory implements UILibFactoryInterface
{
    public function initNewWindow(): UILibInterface
    {
        return new GtkWindow();
    }
}