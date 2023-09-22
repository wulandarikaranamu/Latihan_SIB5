<form method="POST">
    <label for="">Username : </label><br>
    <input type="text" name="username"><br>
    <label for="">Password : </label><br>
    <input type="password" name="pass"><br>
    <input type="submit" name="login" value="login" id="">
</form>

<?php 
    //error_reporting(0);
    $user = $_POST ['username'];
    $pass = $_POST ['pass'];
    //tampilkan setelah form di proses
    $login = $_POST ['login'];
    if(isset($login)){
        echo 'Username : '.$user.'<br> Password : '.$pass;
    }
?>