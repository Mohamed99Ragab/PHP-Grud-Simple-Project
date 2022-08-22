<?php
session_start();
require "lib.php";

if(empty($_SESSION['user'])){
    header("LOCATION: login.php");
}

if(isset($_POST['username'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];
   
    
    //img
    if(!empty($_FILES['img']['tmp_name'])){
    $img = $_FILES['img']['tmp_name'];
    $img_name = $_FILES['img']['name'];
    $type = $_FILES['img']['type'];
    $ar_type = explode("/",$type);
    $ext = $ar_type[1];
    $image_full_name = $username.".".$ext;
    move_uploaded_file($img,"userimg/".$img_name);
    }else{
        $img_name ='';
    }
    if($password == $rpassword){
        $new_password = hash_pass($password);
        $result = updateUser($id,$username,$email,$new_password,$img_name);
        if($result == true){
            header("LOCATION: index.php");
        }
    }else{
        echo "Please confirm your password";
    }
    



}else{
    $user_id = $_GET['id'];
    $user_data = getDataById($user_id);
}



// echo "<pre>";
// print_r($user_data);die;

require "design/update.php";