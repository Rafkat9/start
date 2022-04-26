<?php

namespace Core\Controllers;
use Core\Db\ConnectNotes;

class NotesController 
{
    
    public function __construct ()
    {
        $this->notesMethod();
    }

    public function notesMethod()
    {
        echo 'notes controller';

        print_r($this->connectDb());
    }

    public function connectDb()
    {

        $this->connect = new ConnectNotes();
        $this->dbQueryes = $this->connect->getRow("SELECT * FROM users WHERE id = '1'");
        return $this->dbQueryes;

    }

}

$notes = new NotesController;
