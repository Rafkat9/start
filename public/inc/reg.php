<?php

include 'header.php';

?>
<div class="errMsg">
<?php

if(isset($this->errMsg)){
    echo $this->errMsg;
} 

// echo $this->errMsg;
?>

</div>
<?php

include 'footer.php';
?>