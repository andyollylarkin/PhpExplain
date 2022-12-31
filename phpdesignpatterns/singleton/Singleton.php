<?php

namespace patterns\singleton;

class Singleton {
    /**
     * @var Singleton
     */
    private static $instanse = null;

    public static function getInstance(): self {
        if(is_null(self::$instanse)){
            self::$instanse = new self();
            return self::$instanse;
        }
        return self::$instanse;
    }

    private function __construct()
    {
        
    }
}