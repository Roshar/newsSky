<?php

require __DIR__.'/autoload.php';

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = 'App\Controllers\\'.$ctrl;
$ctrl = new $class;
$ctrl();


