<?php

namespace patterns\singleton;

class Singleton {
    /**
     * @var Singleton
     */
    private static $instanse = null;

    public static function getInstance(): self {
        // отложенная инициализация
        if(is_null(self::$instanse)){
            self::$instanse = new self();
            return self::$instanse;
        }
        return self::$instanse;
    }

    // запрещаем создание обьекта на прямую
    private function __construct()
    {
        
    }
    private function __wakeup()
    {
        
    }
    private function __clone()
    {
        
    }
}