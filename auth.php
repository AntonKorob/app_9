<?php
session_start();

if($_COOKIE['users'] == 'yes')

setcookie('users', 'yes', time() - 3600, '/');
else
setcookie('users', 'yes', time() + 3600, '/');

header('Location: index.php');
?>