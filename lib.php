<?php

function register($username,$email,$password,$img){
   $connection = mysqli_connect("localhost","root","","user_pro");
   $SQL = "INSERT INTO `user`(`username`, `email`, `password`,`img`) VALUES ('$username','$email','$password','$img')";
   mysqli_query($connection,$SQL);
   if(mysqli_affected_rows($connection) == 1){
    return true;
    }else{
        return false;
    }

}


function login($email,$password){
    $connection = mysqli_connect("localhost","root","","user_pro");
   $SQL = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
    $my_query =  mysqli_query($connection,$SQL);
    $data = mysqli_fetch_assoc($my_query);
    return $data;


}

function displayData(){
    $connection = mysqli_connect("localhost","root","","user_pro");
   $SQL = "SELECT `id` ,`username`,`email`,`img`  FROM `user`";
    $my_query =  mysqli_query($connection,$SQL);
    
    $user_data = [];
    while($data = mysqli_fetch_assoc($my_query)){
        $user_data[] = $data;
    }
    return $user_data;

}

function user_Role(){
    return $_SESSION['user']['user_role'];
}


function hash_pass($password){
   return sha1($password);
}


function deleteUser($id){
    $connection = mysqli_connect("localhost","root","","user_pro");
    $SQL = "DELETE FROM `user` WHERE `id`='$id'";
    mysqli_query($connection,$SQL);
    if(mysqli_affected_rows($connection) == 1){
     return true;
     }else{
         return false;
     }
 
 }

 function updateUser($id,$username,$email,$password,$img){
    $connection = mysqli_connect("localhost","root","","user_pro");
    $SQL = "UPDATE `user` SET ";
    if(!empty($username)){
        $SQL .= " `username` = '$username' ";
    }
    if(!empty($email)){
        $SQL .= " , `email` = '$email' ";
    }
    if(!empty($password)){
        $SQL .= " , `password` = '$password' ";
    }
    if(!empty($img)){
        $SQL .= " ,`img` = '$img' ";
    }
    
    $SQL .=" where `id`=$id";
    // echo "<pre>";
    // echo $SQL;die;



    mysqli_query($connection,$SQL);
    if(mysqli_affected_rows($connection) == 1){
     return true;
     }else{
         return false;
     }
 
 }









function getDataById($id){
    $connection = mysqli_connect("localhost","root","","user_pro");
   $SQL = "SELECT `id` ,`username`,`email`,`img`  FROM `user` where `id`=$id";
    $my_query =  mysqli_query($connection,$SQL);
    
   $data = mysqli_fetch_assoc($my_query);
  
    return $data;

}