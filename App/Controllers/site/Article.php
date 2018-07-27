<?php

namespace App\Controllers\site;

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
        $this->view->display(__DIR__ . '/../../../templete/site/article.php');
    }
}