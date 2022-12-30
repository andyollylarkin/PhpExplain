<?php

namespace patterns\state;

final class ConcreteStateA implements StateInterface
{
    /**
     * Храним ссылку на контекст для переключения состояния после обработки действия
     * @var Context
     */
    public $context;
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function handle(): void
    {
        echo "\n State A handle. Enter to state B\n";
//        После того как выполнили payload код, переключаем контекст в новое состояние
        $this->context->setState(Context::STATE_B);
    }
}