<?php

$formRegistr = 
    '<form action="" method="POST">
        <input type="text" name="email" placeholder="your email">
        <input type="text" name="login" placeholder="your login">
        <input type="password" name="password" placeholder="your password">
        <input type="password" name="checkPassword" placeholder="repeat password">
        <button type="submit" name="submit">Send</button>
    </form>';
$formAuth = 
    '<form action="" method="POST">
        <input type="text" name="email" placeholder="your email">
        <input type="password" name="password" placeholder="your password">
        <button type="submit" name="submit">Send</button>
    </form>';
$formNotes = 
    '<form action="" method="POST">
        <input type="text" name="Title" placeholder="Title">
        <input type="text" name="text" placeholder="your text">
        <button type="submit" name="submit">Send</button>
    </form>';




/*
if($takeUrl == 'reg') {
    $title = "dddddd";
    $form = '
    <form action="" method="POST">
        <input type="text" name="email" placeholder="your email">
        <input type="text" name="login" placeholder="your login">
        <input type="password" name="password" placeholder="your password">
        <input type="password" name="checkPassword" placeholder="repeat password">
        <button type="submit" name="submit">Send</button>
    </form>';
    $page = require __DIR__ .'/inc/main.php';
} else if($takeUrl == 'auth') {
    $title = "ggggggg2";
    $form = '
    <form action="" method="POST">
        <input type="text" name="email" placeholder="your email">
        <input type="password" name="password" placeholder="your password">
        <button type="submit" name="submit">Send</button>
    </form>';
    $page = require __DIR__ .'/inc/main.php';
} else if($takeUrl == 'notes') {
    $title = "notes";
    $form = '
    <form action="" method="POST">
        <input type="text" name="Title" placeholder="Title">
        <input type="text" name="text" placeholder="your text">
        <button type="submit" name="submit">Send</button>
    </form>';
    $page = require __DIR__ .'/inc/main.php';
} else if($takeUrl == 'goHome') {
    $title = "Главная страница";
    $page = require __DIR__ .'/inc/main.php';
} else {
    $takeUrl = 'goHome';
    $title = "Главная страница";
    $page = require __DIR__ .'/inc/main.php';
}



</section>

*/
?>