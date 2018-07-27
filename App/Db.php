<?php

namespace App;

class Db
{
    private static $dbh;
    private static $instanse;


    static function callDB()
    {
        $config = Config::getSingle();
        return self::$dbh = new \PDO('mysql:host='.$config->host.';dbname='.$config->dbname,$config->user,$config->password);
    }

    static public function query($sql,$data=[],$class)
    {
        self::callDB();
        $sth = self::$dbh->prepare($sql);
        $sth->execute($data);
        $data = $sth->fetchAll(\PDO::FETCH_CLASS,$class);
        return $data;
    }
    static public function queryUsers($sql,$data=[])
    {
        self::callDB();
        $sth = self::$dbh->prepare($sql);
        $sth->execute($data);
        $data = $sth->fetch();
        return $data;
    }

    static public function execute($sql,$data=[])
    {
        self::callDB();
        $sth =  self::$dbh->prepare($sql);
        return $sth->execute($data);
    }

    public static function getLastId()
    {
        self::callDB();
        return  self::$dbh->lastInsertId();
    }



    public function getInstance()
    {
        if (self::$instanse == null){
            self::$instanse == new Db();
            return self::$instanse;
        }else
        return self::$instanse;
    }
    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}