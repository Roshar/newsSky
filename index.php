<?php

require __DIR__ . '/App/autoload.php';

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = 'App\Controllers\site\\'.$ctrl;
$ctrl = new $class;
$ctrl();


