<?php

include "../vendor/autoload.php";
include_once "di_config.php";

/**
 * @var \Pimple\Container $container
 */

class Stuff {
    public function do(): string
    {
        return "Do stuff" . PHP_EOL;
    }
}

interface Doer {
    public function doStuff();
}

class ConcreteDoer implements Doer
{
    private $staff;

    /**
     * @param $staff
     */
    public function __construct(Stuff $staff)
    {
        $this->staff = $staff;
    }


    public function doStuff()
    {
        echo $this->staff->do();
    }
}

class DoService {

    private $doer;

    public function __construct(Doer $doer)
    {
        $this->doer = $doer;
    }

    public function do()
    {
        $this->doer->doStuff();
    }
}

########## ###########
// Такой код ниже по сути будет использоваться в контроллере и контроллер будет зависеть только от контейнера, но не от сервиса
// Сервис и его зависимости в свою очередь не будут зависеть от других классов. Все зависимости будут обьявлены в конфиге di (в данном случае в di_config.php)

/**
 * @var DoService $service
 */
$service = $container['service'];
$service->do();