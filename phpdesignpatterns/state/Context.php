<?php

namespace patterns\state;

final class Context
{
    /**
     * @var StateInterface;
     */
    public $state;
    const STATE_A = 1;
    const STATE_B = 2;
    const STATE_C = 3;

    public function __construct()
    {
//        Устанавливаем изначальное состояние А (ConcreteStateA)
        echo "\n Initial state A.\n";
        $this->setState(self::STATE_A);
    }

    public function request()
    {
//        Запрос по факту выполнит метод handle текущего состояния
        $this->state->handle();
    }

    public function setState($state)
    {
//        В зависимости от текущего состояния создается новый объект состояния и присваивается как текущее состояние контекста
        if ($state == Context::STATE_A) {
            $this->state = new ConcreteStateA($this);
        } elseif ($state == Context::STATE_B) {
            $this->state = new ConcreteStateB($this);
        } elseif ($state == Context::STATE_C) {
            $this->state = new ConcreteStateC($this);
        }
    }
}