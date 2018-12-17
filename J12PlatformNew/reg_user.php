<?php
    include("connect.php");
    if(!isset($_GET["ad_pass"])){
        if($_GET["ad_pass"] !== "adminpass"){
            die("Error");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php
            if(isset($_POST["reg_new_user"])){
                require_once 'clean.class.php';
                $user = new clean($_POST["username"]);
                $pass = new clean($_POST["pass"]);
                $name = new clean($_POST["name"]);
                
                $pass_hashed = PASSWORD_HASH($pass,PASSWORD_DEFAULT);
                
                $q = mysqli_query($con,"SELECT COUNT(*) t_found FROM users WHERE username='$user'");
                
                if(mysqli_fetch_array($q)["t_found"] == 0){
                    mysqli_query($con,"INSERT INTO users(username,password,name) VALUES('$user','$pass_hashed','$name')");
                    echo 'New user registered';
                }else{
                    echo 'Username already exists';
                }
            }
        ?>
        <form method="post">
            <input type="text" name="name" placeholder="name"><br />
            <input type="text" name="username" placeholder="user"><br />
            <input type="password" name="pass" placeholder="pass"><br />
            <input type="submit" value="Regga" name="reg_new_user">
        </form>
    </body>
</html>
