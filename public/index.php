<?php
session_start();

// function plus() {
//     if('test') { // это запишем в куки
//         $_COOKIE['test'] += ' 1';
//     } else {
//         $_COOKIE['test'];
//     }
//     return $_COOKIE['test'];
// }

spl_autoload_register(function(string $className){
    include __DIR__ .'/../'.$className.'.php';
});

require __DIR__ .'/../core/runApp.php';

