<?php

namespace patterns\state;

final class ConcreteStateC implements StateInterface
{
    public $context;
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function handle(): void
    {
        echo "\n State C handle. Enter to state A\n";
        $this->context->setState(Context::STATE_A);
    }
}