<?php

namespace patterns\factories\abstactfactory;


final class GtkWindow implements UILibInterface
{
    public function renderHead(): string
    {
        return "Gtk window head was rendered";
    }

    public function renderBody(): string
    {
        return "Gtk window body was rendered";
    }
}