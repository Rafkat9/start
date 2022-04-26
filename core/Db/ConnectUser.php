<?php

namespace Core\Db;

class ConnectUser
{

    private $connection;

    private $host = "localhost";
    private $dbname = "usersDb";
    private $username = "root";
    private $password = "";

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try{
            $this->connection = new \PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password);
            return $this;
        }catch(\PDOException $e){
            echo 'Ошибка к подключению к БД: ' . $e->getMessage();
        }
    }

    public function execute($sql)
    {
        $sth = $this->connection->prepare($sql);
        return $sth->execute(); 
    }

    public function query($sql)
    {
        $sth = $this->connection->prepare($sql);
        $sth->execute();

        $result = $sth->fetchAll(\PDO::FETCH_ASSOC); 

        if($result === false){
            return [];
        }

        return $result;
    }

}
