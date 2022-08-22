<?php
session_start();
require "lib.php";

if(empty($_SESSION['user'])){
    header("LOCATION: login.php");
}

$id_user = $_SESSION['user']['id'];
if($id_user == $_GET['id']){
    echo "No Permission to can delete self <br>";
    echo '<a href="index.php">Back to home</a>';
}else{
    $result = deleteUser($_GET['id']);

    if($result == true){
        header("LOCATION: index.php");
    }else{
        echo "delete faild!!!";
    }
} 



