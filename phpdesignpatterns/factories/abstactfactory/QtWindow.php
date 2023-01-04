<?php

namespace patterns\factories\abstactfactory;


final class QtWindow implements UILibInterface
{
    public function renderHead(): string
    {
        return "Qt window head was rendered";
    }

    public function renderBody(): string
    {
        return "Qt window body was rendered";
    }
}