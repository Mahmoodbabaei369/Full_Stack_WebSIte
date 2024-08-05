<?php
session_start();

$valid_username = 'hamoonma'
$valid_password = 'root'

if($_SERVER['REQUEST_METHOD'] === 'POST') {

$username = $_POST['username'];
$password = $_POST['password'];

}
if ($username === $valid_username && $password === $valid_password ) {

$_SESSION['loggedin'] = true;    
header('location: admin.php');

else{
    echo 'رمز اشتباه است' ;   
}

}

