<?php

use Core\Controllers\IndexController;
use Core\Controllers\NotesController;
use Core\Controllers\UserController;


$uri = $_SERVER['REQUEST_URI'];

if($uri === '/')
    require 'pages/main.php';
elseif($uri === '/notes')
    require 'pages/notes.php';
else
    require 'pages/error404.php';

// $takeUrl = $_GET['route'];

$arrRoutes = [
    'notes'=>[ 'IndexController()', 'index()'],
    'auth'=>[ 'UserController', 'index'],
];

foreach($arrRoutes as $key => $elem)
{
    if($takeUrl == $key) {
        
        $a = new $elem[0] ."=>".$elem[0];
        return $a;
    }
}













 









?>