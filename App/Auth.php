<?php

namespace App;

use App\Models\User;

class Auth extends User
{
    public static function isPost():bool
    {
        if (isset($_POST['action'])and $_POST['action'] == 'login'){
           if (empty($_POST['login']) or $_POST['login'] == ''
           or empty($_POST['pass']) or $_POST['pass'] == ''){
              $GLOBALS['errorMsg'] = "Заполните все поля";
              return false;
           }
           if (self::checkUser($_POST['login'], $_POST['pass'])){
               session_start();
               $_SESSION['loggedIn'] = true;
               $_SESSION['login'] = $_POST['login'];
               $_SESSION['pass'] = $_POST['pass'];
               return true;
           }else{
               session_start();
               unset($_SESSION['loggedIn']);
               unset($_SESSION['login']);
               unset($_SESSION['pass']);
               $GLOBALS['errorMsg'] = 'Неверные данные !';
               return false;
           }
        }
        session_start();
        if (isset($_SESSION['loggedIn'])){
            return self::checkUser($_SESSION['login'],$_SESSION['pass']);
        }else{
            return false;
        }

    }
    public static function checkUser($login,$pass):bool
    {
        return self::databaseContainsAuthor($login,$pass);
    }
}