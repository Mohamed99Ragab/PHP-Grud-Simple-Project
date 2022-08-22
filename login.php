<?php
session_start();
require "lib.php";

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $new_password = hash_pass($password);
    $user = login($email,$new_password);
    if(!empty($user)){
        $_SESSION['user'] = $user;
        header("LOCATION: index.php");

    }
}

if(!empty($_SESSION['user'])){
    header("LOCATION: index.php");
}



include "navbar.php" ;
require "design/login.html";