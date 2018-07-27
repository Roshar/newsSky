<?php

namespace App\Controllers\site;

use App\Controller;


class Admin extends Controller
{
    protected function access():bool
    {
        return \App\Auth::isPost();
    }
    protected function handle()
    {
        $this->view->articles = \App\Models\Article::findAll();

        $this->view->display(__DIR__ . '/../../../templete/admin/index.php');
    }
}