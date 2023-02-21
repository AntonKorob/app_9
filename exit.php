<?php

// exti to setcookie

session_start();
// var_dump( $_SESSION['user']);
$user = ( $_SESSION['user']);

setcookie('user', $user, time() -3600, '/');
// echo $_COOKIE['user'];

header('Location:login.php');
?>