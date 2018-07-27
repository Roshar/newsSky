<?php

namespace App\Controllers\site;

use App\Controller;

class AddNews extends Controller
{
    protected function dataFromForms(): bool
    {
        return DataFromForm::isPost();
    }

    protected function handle()
    {
        $this->view->articles = \App\Models\Article::findAll();

        $this->view->display(__DIR__ . '/../../../templete/admin/index.php');
    }

}