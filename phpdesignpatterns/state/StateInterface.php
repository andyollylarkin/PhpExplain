<?php

namespace patterns\state;
interface StateInterface
{
    /**
     * Действия производимое в конкретном состоянии. После произведения действия метод переключает обьект в другое состояние
     */
    public function handle(): void;
}