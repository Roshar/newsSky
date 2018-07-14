<?php

namespace App;

abstract class Model
{
    public $id;
    public $newsdate;
    const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM '.static::TABLE,[], static::class);
    }
    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM '.static::TABLE.' WHERE id =:id';
        $data = $db->query($sql,[':id'=>$id],static::class);
        return $data ? $data[0]: null;
    }
    public function insert()
    {
        $fields = get_object_vars($this);
        $cols =[];
        $data =[];
        foreach ($fields as $name=> $field){
            if ('id' == $name)
                continue;
            if ('newsdate' == $name)
                $field = date('Y-m-d H:i:s');
            $cols[] = $name;
            $data[':'.$name] = $field;
        }

       $sql = 'INSERT INTO '.static::TABLE. '('.implode(',',$cols).') VALUES ('.implode(',',array_keys($data)).')';
       $db = new Db();
       $this->id = $db->getLastId();
       $db->execute($sql,$data);

    }
}