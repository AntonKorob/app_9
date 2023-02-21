<?php

// db connection 
$host = 'localhost';
$name = 'root';
$password = '';
$db_name = 's-see';

$conn = new mysqli($host, $name, $password, $db_name);

if(!$conn ){
    die("Error: ". mysqli_connect_error());
}