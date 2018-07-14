<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {

        $config = Config::getSingle();
        $this->dbh = new \PDO('mysql:host='.$config->host.';dbname='.$config->dbname,$config->user,$config->password);
    }

    public function query($sql,$data=[],$class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        $data = $sth->fetchAll(\PDO::FETCH_CLASS,$class);
        return $data;
    }

    public function execute($sql,$data=[])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    function getLastId()
    {
        return $this->dbh->lastInsertId();
    }

}