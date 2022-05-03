<?php

use Core\Route;

// =============== Маршрутизация ================
$newController = new Route;
$newFile = $newController->getNewController();
echo $newFile;
echo '<hr>';

if(isset($newFile)){
    // include \ 
    require_once __DIR__ .'/../core/Controllers/'.$newFile.'.php';
} else {
    require_once __DIR__ .'/../core/Controllers/IndexController.php';
}


