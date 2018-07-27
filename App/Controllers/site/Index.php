<?php

namespace App\Controllers\site;



use App\Controller;

class Index extends Controller
{
    protected function handle(){


        $this->view->articles = \App\Models\Article::findAll();

        $this->view->display(__DIR__ . '/../../../templete/site/index.php');
    }

}