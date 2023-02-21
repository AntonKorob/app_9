<?php

session_start();

// connection
$host = 'localhost';
$name = 'root';
$password = '';
$db_name = 's-see';

$conn = new mysqli($host, $name, $password, $db_name);

if(!$conn ){
    die("Error: ". mysqli_connect_error());
}
if(isset($_POST)){
    $name = $_POST['name'];
    $password = $_POST['password'];
}else{
    echo "Введите имя и пароль";
}

// hash
$password = md5($password, "dsfgdfghsdfh");

// selec
$sql_select = "SELECT * FROM `users` WHERE name = '$name' ";
$result = mysqli_query($conn, $sql_select);

$user = mysqli_fetch_assoc($result);
if(!$user){
    echo "Прользователь не найден";
    exit();
}else{
    // setcookie
    
    setcookie('user', $user['name'], time() + 3600, "/");
    // $session = $user['name'];
    // $_SESSION['user'] = $session;

}

header('Location: login.php');
