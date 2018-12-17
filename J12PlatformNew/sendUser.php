<?php

include_once("connect.php");
require_once 'clean.class.php';

if(!isset($_SESSION["user"])){
    header("location:index.php");
}else{
    $user = new clean($_SESSION["user"]);

    
    $q = mysqli_query($con,"SELECT COUNT(*) as userfound FROM users WHERE username='$user'");
    if(mysqli_fetch_array($q)["userfound"] == 0){
        session_destroy();
        unset($_SESSION);
        header("location:index.php");
    }
}

?>