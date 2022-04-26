<?php

namespace Core\Controllers;
use Core\Db\ConnectNotes;

class RegController 
{
    
    public function __construct ()
    {
        $this->regMethod();
    }

    public function regMethod()
    {
        echo 'it reg controller';
        print_r($this->connectDb());
    }

    public function connectDb()
    {

        $this->connect = new ConnectNotes();
        $this->dbQueryes = $this->connect->getRow("SELECT * FROM users WHERE id = '1'");
        return $this->dbQueryes;
    }

}

$reg = new RegController;