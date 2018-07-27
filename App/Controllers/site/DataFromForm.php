<?php

namespace App\Controllers\site;



class DataFromForm extends \App\Models\Article
{
    public static function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['title']) or $_POST['title'] == '' or empty($_POST['content']) or $_POST['content'] == ''
                or empty($_POST['category']) or $_POST['category'] == ''){
                $GLOBALS['errorMsg'] = 'Вам необходимо заполнить все поля';
                return false;
            }
                \App\Insertindb::insertInDbNews($_POST['title'],$_POST['content'],$_POST['category']);
                return true;
        }else{
            return false;
        }
    }
}



