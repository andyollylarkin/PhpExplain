<?php

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Contracts\EventDispatcher\Event;

include_once "../vendor/autoload.php";

class FooListener{
    public function fooAction(Event $event): void
    {
        var_dump($event);
    }
}

class FooEvent extends Event
{
    public const EVENT_NAME = 'foo.event';

}
//Инициализируем диспетчер (Наблюдатель)
$dispatcher = new EventDispatcher();
//Инициализируем слушателя (Наблюдаемый)
$listener = new FooListener();
// Добавляем слушателя в диспетчер. При возникновении события будет вызван метод fooAction у слушателя.
$dispatcher->addListener('foo.event', [$listener, 'fooAction']);
// Обьект события
$ev = new FooEvent();
// Регистрируем событие
$dispatcher->dispatch($ev, FooEvent::EVENT_NAME);

