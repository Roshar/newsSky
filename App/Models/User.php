<?php

namespace App\Models;

use App\ModelAdmin;

class User extends ModelAdmin
{
    const TABLE = 'accounts';
    protected $name;
    protected $pass;



}