<nav><ul><?php

        $notes = '<li><a href="notes">Заметки</a></li>';
        $registr = '<li><a href="reg">Регистрация</a></li>';
        $auth = '<li><a href="auth">Авторизация</a></li>';
        $goHome = '<li><a href="goHome">На главную</a></li>';
        // $personalAccount = '<li><a href="./">Личный кабинет</a></li>';
        // Здесь список из бд

        require_once __DIR__ .'/forms.php';

        $takeUrl = $_GET['route'];
        if($takeUrl == 'reg') {
            echo $goHome, $auth, $notes.'</ul></nav><section><div class="form form_reg">' .$formRegistr. '</div></section>';
            // Здесь список из бд
        } else if($takeUrl == 'auth') {
            echo $goHome, $registr, $notes.'</ul></nav><section><div class="form form_auth">' .$formAuth. '</div></section>';
        } else if($takeUrl == 'notes') {
            echo $goHome, $registr, $auth.'</ul></nav><section><div class="form form_notes">' .$formNotes. '</div></section>';
        } else if($takeUrl == "(.)") {
            echo $goHome, $registr, $auth, $notes.'</ul></nav><section><div class="form form_notes">' .$formNotes. '</div></section>';
        } else {
            echo $goHome, $registr, $auth, $notes.'</ul></nav><section><div class="form form_notes">' .$formNotes. '</div></section>';
        }



        ?>
