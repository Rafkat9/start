<?php

namespace Core;

class Route
{
    private $routes;

    private $getUrl;

    private $newController;
    private $newMethod;

    /**
     * @return string
     * @return $this
     * Route construct
     */
    public function __construct()
    {
        $this->getUrlAndPage();
        
    }

    /**
     * @return string ??
     * @return mixed 
     */
    public function getUrlAndPage()
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

