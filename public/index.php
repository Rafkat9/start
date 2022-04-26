<?php

spl_autoload_register(function(string $className){
    include __DIR__ .'/../'.$className.'.php';
});

use Core\Route;


// =============== Маршрутизация ================
$newController = new Route;
$newFile = $newController->newController;
echo $newFile;

if(isset($newFile)){
    require_once __DIR__ .'/../core/Controllers/'.$newFile.'.php';
} else {
    require_once __DIR__ .'/../core/Controllers/IndexController.php';
}
// =============== Шаблон ================
$a = require_once __DIR__ .'/inc/main.php';
echo $a;


