<?php
session_start();
$_SESSION['user_id']=123456;
$username=filter_input(INPUT_POST,'username');
$password=filter_input(INPUT_POST,'password');
$_SESSION["username"] = $username;
$_SESSION["password"] =$password ;
header('Location:i clogin.php');


?>