<?php

namespace Core;

class Route
{
    public $routes;

    public $getUrl;

    public $newController;
    public $newMethod;

    public function __construct()
    {
        $this->enable();
    }

    public function enable()
    {
        $this->routes = require __DIR__ . '/routes.php';
        $this->getUrl = $_GET['route'];

        foreach($this->routes as $key => $elem) {
            if($key === $this->getUrl) {
                    $this->newController = $elem[0];
                    $this->newMethod = $elem[1];
            }
        }
    }

    public function getNewController()
    {
        return $this->newController;
    }
    public function getNewMethod()
    {
        return $this->newMethod;
    }

}








