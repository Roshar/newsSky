<?php

namespace App;

class Config
{
    private static $single;
    protected $db = [
        'host' => 'localhost',
        'dbname' => 'NewsSky',
        'user' => 'root',
        'password' => ''
    ];

    public function getSingle()
    {
        if (self::$single == null){
            self::$single = new Config();
            return self::$single;
        }
        else {
            return self::$single;
        }
    }
    public function __get($name)
    {
       return $this->db[$name] ?? null;
    }
    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}