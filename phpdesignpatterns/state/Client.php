<?php

namespace patterns\state;


final class Client
{
    public function __construct()
    {
//        Создаем класс контекста который реализует запросы
        $context = new Context();
        $context->request();
        $context->request();
        $context->request();
        $context->request();
        $context->request();
    }
}