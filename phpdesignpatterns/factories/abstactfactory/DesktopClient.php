<?php

namespace patterns\factories\abstactfactory;


final class DesktopClient
{
    public UILibInterface $windowManager;
    public function __construct(UILibFactoryInterface $factory)
    {
        $this->windowManager = $factory->initNewWindow();
    }

    public function openWindow(): void
    {
        var_dump($this->windowManager->renderHead());
        var_dump($this->windowManager->renderBody());
    }
}