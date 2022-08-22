<?php
session_start();
require "lib.php";

if(empty($_SESSION['user'])){
    header("LOCATION: login.php");
}
// $id_user = $_SESSION['user']['id'];
$data = displayData();
// echo "<pre>";
// print_r($data);

$userRole = user_Role();
// echo $userRole;die;

include "navbar.php" ;
include "design/index.php";

    
