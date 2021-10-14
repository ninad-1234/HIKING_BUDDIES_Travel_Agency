<?php
session_start();
$_SESSION['user_id']=123456;

$name=filter_input(INPUT_POST,'search');
$_SESSION["name"] = $name;
header('Location:k package_after.php');


?>