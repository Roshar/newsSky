<?php

namespace App\Controllers\site;

use App\Controller;

class DeleteArticleInDb extends Controller
{
    public function isDelete()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (empty($_POST['id']) or $_POST['id'] == ''){
                $GLOBALS['errorMsg'] = 'Невозможно выполнить операцию';
                return false;
            }
            \App\Models\DeleteArticle::deleteFromNewsArticleById($_POST['id']);
            return true;
        }
    }

    protected function access():bool
    {
        return \App\Auth::isPost();
    }
    protected function handle()
    {
        $this->isDelete();

        $this->view->articles = \App\Models\Article::findAll();

        $this->view->display(__DIR__ . '/../../../templete/admin/index.php');
    }
}