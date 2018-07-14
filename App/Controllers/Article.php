<?php

namespace App\Controllers;

use App\Controller;

class Article extends Controller
{
   /*установка доступа
    * protected function access():bool
    * {
    *   return true
    * }
    */

    protected function handle()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        $this->view->display(__DIR__.'/../../templete/article.php');
    }
}