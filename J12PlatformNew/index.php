<?php
    ob_start();
    session_start();
    include("connect.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="css/input.css">
    </head>
    <body>
        
        <div style="padding-top:20%;">
        <img style="width:30%; float:left; padding-left:25%;"src="images/j12logo.png">
        
        
        
        <?php
            if(isset($_POST["login"])){
                require_once 'clean.class.php';
                $u = new clean($_POST["username"]);
                $p = $_POST["password"];
                
                $query = mysqli_query($con,"SELECT password,username FROM users WHERE username='$u'");

                $result = mysqli_fetch_array($query);
                
                if(PASSWORD_VERIFY($p,$result["password"])){
                    
                    $_SESSION["user"] = $result["username"];
                    header("location:dhsfund.php");
                }else{
                    echo 'nope!';
                }
                
            }
        ?>
        
            
            
            
            
        <form style="padding-top:150px; float: auto;margin-left:35px;" method="post">
            <input type="text" name="username" placeholder="Username"><br />
            <input type="password" name="password" placeholder="Password"><br />
            <input type="submit" name="login">
        </form>
        </div>
    </body>
</html>



