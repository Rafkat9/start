<?php

use Core\Db\ConnectNotes;

$db = new ConnectNotes;

$allPosts = $db->getRows("SELECT * FROM `users` ORDER BY id DESC");

?><section><div class="allPosts"><?php 

foreach($allPosts as $firstArray ){
    foreach($firstArray as $secondArray){
        echo $secondArray. '<br>';
    }
}

?></div></section>


