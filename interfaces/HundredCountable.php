<?php

namespace interfaces;

/**
 * Реализация интерфейса Countable. После создания данный обьект может быть передан в функцию count() стандартной библиотеки
 */
class HundredCountable implements \Countable{

    private $elements;
    private $countElements;

    public function __construct()
    {
        foreach($this->gen() as $element){
            $this->elements[] = $element;
            $this->countElements++;
        }
    }

    private function gen(): \Generator {
        $a = 0;
        for($i = 0; $i < 100; $i++){
            $a++;
            yield $a;
        }
    }

    public function count(): int
    {
        return $this->countElements;
    }
}