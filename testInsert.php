<?php
require __DIR__ . '/App/autoload.php';
$article = new \App\Models\Article();
$article->title = 'dfdfdf';
$article->content = 'dcdcd';
$article->categoryid = 1;
$article->insert();
echo 'sdsd';