<?php
session_start();
require "lib.php";
include "navbar.php" ;
include "design/register.html";


if(isset($_POST['username'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    //image file
    $tmp = $_FILES['img']['tmp_name'];
    $type = $_FILES['img']['type'];
    $ext_ar = explode("/",$type);
    $extention_img = $ext_ar[1];
    $imgFullName = $username.".".$extention_img;




    if($repassword == $password){
        $new_password = hash_pass($password);
        $result = register($username,$email,$new_password,$imgFullName);

        if(!empty($result)){
            move_uploaded_file($tmp,"userimg/".$username.".".$extention_img);

            echo "user account added successfully";
            header("LOCATION: login.php");
        }else{
            echo "user failed!!";
        }

    }else{
        echo "please confirm your password";
    }

}



if(!empty($_SESSION['user'])){
    header("LOCATION: index.php");
}




