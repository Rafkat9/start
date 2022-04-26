<?php

namespace Core\Db;


class ConnectNotes 
{

    private static $conn;

    private $host = "localhost";
    private $db_name = "notesDb";
    private $username = "root";
    private $password = "";

    private $pdo;
    private $isConnected;

    public function __construct()
    {
        
            try {
                $this->pdo = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
            } catch(\PDOException $exception){
                echo "Connection error: " . $exception->getMessage();
            }
    }

    // ========= Получение одной записи =============

    public function getRow($query , $params = []) 
    {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch( \PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    // ========= Получение всех записей =============

    public function getRows($query , $params = []) 
    {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch( \PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    // ========= Запись в бд =============

    public function insertRow ($query , $params = []) 
    {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return true;
        } catch( \PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    // ========= Изменение записи в бд =============

    public function updateRow ($query , $params = []) 
    {
        {
            $this->insertRow($query, $params);
        }
    }

    // ========= Удаление записи в бд =============

    public function DeleteRow ($query , $params = []) 
    {
        $this->insertRow($query, $params);
    }

}

$connectDb = new ConnectNotes;

