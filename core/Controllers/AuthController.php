<?php

namespace Core\Controllers;

class AuthController 
{
    
    public function __construct ()
    {
        $this->authMethod();
    }

    public function authMethod()
    {
        echo 'AuthHello';
    }

}

$auth = new AuthController;