<?php

include 'header.php';

include 'listNotes.php';

echo $this->abv;
echo '<hr>';
echo '<hr>';
echo '<hr>';
foreach($this->dbQueryes as $elem) 
{
    echo $this->v = $elem['id']. '<hr>';
    echo $this->vb = $elem['name']. '<hr>';
    echo $this->vn = $elem['mail']. '<hr>';
}
echo '<hr>';
include 'footer.php';


?>
