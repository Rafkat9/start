<?php

namespace Core\Controllers;
use Core\Db\ConnectNotes;

class AuthController 
{

    public $errMsg = '';
    
    public function __construct ()
    {
        $this->authMethod();
    }

    public function authMethod()
    {
        echo '<hr>';

        if(isset($_POST['mail']) and isset($_POST['password'])) {

            $mail = trim($_POST['mail']);
            $name = trim($_POST['password']);

            $this->connect = new ConnectNotes();
            $this->dbQueryes = $this->connect->getRows("SELECT * FROM users");

            foreach($this->dbQueryes as $elem) 
            {
                    if($mail == $elem['mail']) 
                    {
                        echo '123';
                    }

            }

            // =============== Шаблон ================
            include('inc/auth.php');

        } else {
            // $this->errMsg = "Введите данные";
            include('inc/auth.php');
        }


        // $connect = new Connection();
        // $this->view->renderUrl('main.php', ['title'=>'This title page ']);
    }
}

$auth = new AuthController;


/*
 
        echo '<hr>';
        print_r($this->connectDb());

        echo '<hr>';
        

        // =============== Шаблон ================
        include('inc/main.php');
    }

    public function connectDb()
    {

        $this->connect = new ConnectNotes();
        $this->dbQueryes = $this->connect->getRow("SELECT * FROM users WHERE id = '1'");
        return $this->dbQueryes;

    }
    public function validateForm()
    {
        $login = (string)trim($_POST['login']);
        if(isset($login)) {
            echo "   validated " . $login;
        } else {
            echo 'no $login';
        }
        $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
        $password = (string)trim($_POST['password']);

        if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
            echo "Недопустимая длина логина";
            exit();
        } else if(mb_strlen($password) < 5 || mb_strlen($password) > 90) {
            echo "Недопустимая длина пароля";
            exit();
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
*/