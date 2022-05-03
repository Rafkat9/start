<?php

namespace Core\Controllers;

class HomeController 
{
    
    public function __construct ()
    {
        $this->helloMethod();
    }

    public function helloMethod()
    {
        echo 'HomeHello';
        // $connect = new Connection();
        // $this->view->renderUrl('main.php', ['title'=>'This title page ']);
    }

}

$home = new HomeController;

