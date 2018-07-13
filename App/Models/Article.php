<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    const TABLE = 'news';

    public $title;
    public $content;
    public $categoryid;
    public $imglink;




}