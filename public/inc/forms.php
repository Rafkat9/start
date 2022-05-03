<?php

$formRegistr = 
    '<form action="/newproject/public/reg" method="POST">
        <input type="text" name="mail" placeholder="your mail">
        <input type="text" name="name" placeholder="your name">
        <input type="password" name="password" placeholder="your password">
        <input type="password" name="checkPassword" placeholder="repeat password">
        <button type="submit" name="submit">Send</button>
    </form>';

$formNotes = 
    '<form action="" method="POST">
        <input type="text" name="Title" placeholder="Title">
        <input type="text" name="text" placeholder="your text">
        <button type="submit" name="submit">Send</button>
    </form>';

?>