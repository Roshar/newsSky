<?php

namespace App;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function access():bool
    {
        return true;
    }
    protected function dataFromForms()
    {
        return true;
    }

    public function __invoke()
    {
        if ($this->access() and $this->dataFromForms()){
            $this->handle();
        }else if ( $this->dataFromForms() == false){
            include __DIR__.'/../templete/admin/addNewArticle.php';
        } else if($this->access()==false){
            include __DIR__.'/../templete/admin/login.php';
        }
    }

    abstract protected function handle();
}