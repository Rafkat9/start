<?php

namespace Core\Controllers;
use Core\Db\ConnectNotes;


class IndexController 
{
    public $connect;
    public $dbQueryess;
    public $insertRow;
    // public $getMethod;
    public $abv;

    
    public function __construct ()
    {
        echo $this->indexMethod();
    }

    public function indexMethod()
    {

        $this->connectModel();

        echo '<hr>';
        $this->abv = 'AAAAAABBBBBBB1';
        

        $this->dbQueryes = $this->connect->getRows("SELECT * FROM users");



        // =============== Шаблон ================
        // require_once __DIR__ .'/../../public/inc/main.php';
        include('inc/main.php');
    }

    public function connectModel()
    {
        $this->connect = new ConnectNotes();
    }

}

$a = new IndexController;
