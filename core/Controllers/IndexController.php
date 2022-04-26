<?php

namespace Core\Controllers;
use Core\Db\ConnectNotes;

class IndexController 
{
    public $connect;
    public $dbQueryes;
    public $insertRow;
    
    public function __construct ()
    {

        $this->indexMethod();
    }

    public function indexMethod()
    {
        echo 'indexhi';

        print_r($this->connectDb());

    }

    public function connectDb()
    {

        $this->connect = new ConnectNotes();
        // Добавит после раскомментирования
        // $this->insertRow = $this->connect->insertRow("INSERT INTO users( `name` , `mail` ) VALUE (?, ?)",['RRRRRRR', 'rrr@mail.ru']);
        $this->dbQueryes = $this->connect->getRows("SELECT * FROM users");
        return $this->dbQueryes;

    }



}

$index = new IndexController;
