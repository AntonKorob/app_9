<?php
session_start();

// page check
include 'header.php';
include 'navigation.php';
include 'config.php';

// db connection
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

$error = '';
if (trim($email) == '')
    $error = 'Enter email';
else if (trim($message) == '')
    $error = 'Enter message';
else if (strlen($message) < 10)
    $error = 'Message to longe 10';

if ($error != '') {
    echo $error;
    exit;
}
?>
<div class="w-50 bg-secondary m-4 p-3">
<?php
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Message: " . $message . "<br>";
?>
</div>
<?php

include 'form_contact.php';

include 'footer.php';
?>