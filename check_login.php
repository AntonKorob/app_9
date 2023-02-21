<?php
session_start();
// check login

include_once 'config.php';

if(isset($_POST)){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // hash
    $password = md5($password."dsfgfgfdg");
    
    $sql_insert = "INSERT INTO users (name, email, password) VALUES('$name', '$email', '$password')";
   
    $result = mysqli_query($conn, $sql_insert);
    $conn->close();
}else{
    echo "error";
}

header('Location: login.php');
