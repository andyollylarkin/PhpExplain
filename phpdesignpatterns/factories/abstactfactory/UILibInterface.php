<?php

namespace patterns\factories\abstactfactory;


interface UILibInterface
{
    public function renderHead(): string;

    public function renderBody(): string;
}