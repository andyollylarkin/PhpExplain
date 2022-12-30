<?php

namespace patterns\state;


final class ConcreteStateB implements StateInterface
{
    public $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function handle(): void
    {
        echo "\n State B handle. Enter to state C\n";
        $this->context->setState(Context::STATE_C);
    }
}