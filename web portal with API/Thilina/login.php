<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/login.css"/>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
<link rel="shortcut icon" href="https://storage.googleapis.com/apiit-static/logo-1.jpg" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body
    {
        background-image: url("./pics/regis.jpg");
        background-size:cover;
    }
    .form_login
    {
        display: flex;
        flex-direction: column;
        background-color: #3af0bc;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        width: 30%;
        border: 2px solid #76eb08;
        color: white;
    }
</style>
</head>
<body>
    <?php
    require_once ("./navbar_nr.php");
    ?>

    <div class="container2">
        
        
            
            <form action="./login.php" method="post" class="form_login" >
                <h1 class="head_login">LOGIN</h1>
                <input type="text" name="uid" placeholder="Username"/>
                
                <input type="password" name="pwd" placeholder="Password"/>
                
                <button type = "submit" name="login-submit123">Login
                <i class="fa fa-sign-in"></i>
                </button>
                <button onclick="location.href='./register.php'" type="button">Sign-up
                <i class="fa fa-sign-in"></i>
                </button>
            </form>
        
    </div>

<div class="registration_msg">
<?php

if(isset($_POST['login-submit123']))
{
    require ("./config.php");
    $user = $_POST['uid'];
    $password = $_POST['pwd'];

    if (empty($user)||empty($password))
    {
        
        echo '<script>alert("Remove empty spaces")</script>';
        exit();
    }
    else
    {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($connection);

        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            echo '<script>alert("Check Username or Email")</script>';

            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt,'ss',$user,$user);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row=mysqli_fetch_assoc($result))
            {
                $pwd_check = password_verify($password,$row['pwdUsers']);
                if($pwd_check == false)
                {
                    echo '<script>alert("Wrong Password")</script>';
                    exit();

                }
                else{
                    
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    header("Location:./index.php");
                    exit();
                    
                }
            }
            else {
                echo '<script>alert("No such user")</script>';
                exit();
            }
        }
    }


}


?>
</div>
