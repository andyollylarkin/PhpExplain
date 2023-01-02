<?php

include_once "../../vendor/autoload.php";

use patterns\lazyload\Container;

interface SomeInterface
{
    public function greet(string $name): string;
}

class B implements SomeInterface
{
    public function greet(string $name): string
    {
        return $name . ' from B ' . PHP_EOL;
    }
}

class C implements SomeInterface
{
    public function greet(string $name): string
    {
        return $name . ' from C ' . PHP_EOL;
    }
}

class A
{
    private SomeInterface $a;
    private string $b;

    public function __construct(SomeInterface $a, string $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getName(): void
    {
        echo $this->a->greet($this->b);
    }
}


// Создаем контейнер
$c = new Container();
// Регистрируем имя
$c->set('name', "Jannet");
// Регистрируем интерфейс. Тут можно заменить C на B, т.к. они оба реализуют интерфейс SomeInterface
$c->set(SomeInterface::class, C::class);
//
// Регистрируем компонент А с указанием зависимостей
$c->set('a_comp', fn(Container $container) => new A($container->get(SomeInterface::class), $container->get("name")));

// Получаем настроенный компонент А
$instance = $c->get('a_comp');
$instance->getName();




