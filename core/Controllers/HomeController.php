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
    }

}

$home = new HomeController;