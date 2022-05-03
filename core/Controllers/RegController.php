<?php

namespace Core\Controllers;
use Core\Db\ConnectNotes;

class RegController 
{
    public $isSubmit = false;
    public $errMsg = '';
    
    public function __construct ()
    {
        $this->regMethod();
    }

    public function regMethod()
    {
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            // Проверка на валидацию данных
            $this->validateForm();
            if(isset($this->errMsg)){
                include('inc/reg.php');
                exit();
            } else {
                // добавл пользователя
                $this->connect = new ConnectNotes();
                $this->dbQueryes = $this->connect->insertUser();

                return $this->dbQueryes;
                // require_once '/../config/validate.php';
                // include('core/config/validate.php');
                $this->isSubmit = true;

            }


        } else {
            
            // Если метод GET тоесть после добавления данных 
            $this->isSubmit = false;
            echo "После того как зарегался попадает на главную страницу 
            и типа спасибо за регистрацию";
            echo 'no valid';
        }
 
        echo '<hr>';
        print_r($this->connectDb());

        echo '<hr>';
        

        // =============== Шаблон ================
        include('inc/reg.php');
    }

    public function connectDb()
    {
        $this->connect = new ConnectNotes();
        $this->dbQueryes = $this->connect->getRow("SELECT * FROM users WHERE id = '1'");
        return $this->dbQueryes;
    }

    public function validateForm()
    {

        $name = trim($_POST['name']);
        $name = (string)$name;

        $mail = filter_var(trim($_POST['mail']), FILTER_VALIDATE_EMAIL);
        
        $password = trim($_POST['password']);
        $password = (string)$password;

        $checkPassword = trim($_POST['checkPassword']);
        $checkPassword = (string)$checkPassword;

        if(!($password === $checkPassword)) {
            $this->errMsg = "Пароли отличаются";
        }


        if($mail === '' || $name === '' || $password === '') {
            $this->errMsg = "Заполните все поля";
        }

        if(mb_strlen($name) < 5 || mb_strlen($name) > 90) {
            $this->errMsg = "Недопустимая длина имени";
        }

    }
    // public function createUser()
    // {
    //     $email = $_POST['email'];
    //     $login = $_POST['login'];
    //     $password = $_POST['password'];

    //     $sql = "INSERT users (email, login, password) VALUE (:e, :l, :p)";
    //     $this->connect = new ConnectNotes();
    //     $query = $this->connect->prepare($sql);
    //     $query->execute(['e'=> $email, 'l'=> $login, 'p'=> $password]);
    // }

}

$reg = new RegController;