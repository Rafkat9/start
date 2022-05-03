<?php
include 'header.php';
?>

<form action="/newproject/public/auth" method="POST">
    <input type="text" name="mail" placeholder="your mail">
    <input type="password" name="password" placeholder="your password">
    <button type="submit" name="submit">Send</button>
</form>

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