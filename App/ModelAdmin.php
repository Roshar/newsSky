<?php

namespace App;

abstract class ModelAdmin
{
    const TABLE = '';

    public static function databaseContainsAuthor($name, $pass)
    {
        $sql = 'SELECT COUNT(*) FROM '.static::TABLE.' WHERE login = :name AND pass =:pass';
        $data = Db::queryUsers($sql,[':name' => $name, ':pass' => $pass]) ;
//        if ($data[0] > 0){
//            return true;
//        }else
//        {
//            return false;
//        }
        return $data ? $data[0]: false;
    }


    public static function deleteFromNewsArticleById($id)
    {
        $sql = 'DELETE FROM '.static::TABLE.' WHERE id = :id';
        return $data = Db::execute($sql,[':id' => $id]);
    }

}