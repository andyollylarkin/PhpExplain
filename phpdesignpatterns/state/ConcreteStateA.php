<?php

namespace patterns\state;

final class ConcreteStateA implements StateInterface
{
    public $context;
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function handle(): void
    {
        echo "\n State A handle. Enter to state B\n";
        $this->context->setState(Context::STATE_B);
    }
}