<?php
namespace App;

class Insertindb
{
    public static function insertInDbNews($title,$content,$category)
    {
        $article = new \App\Models\Article();
        $article->title = $title;
        $article->content = $content;
        $article->categoryid = $category;
        return $article->insert();
    }

}