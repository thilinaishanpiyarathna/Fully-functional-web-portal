<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/signup.css"/>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body
    {
        background-image: url("./pics/regis.jpg");
        background-size:cover;
    }
</style>
</head>
<body>
    <?php
    require_once ("./navbar_nr.php");
    ?>

    <div class="container1">
        
        
            
            <form action="./register.php" method="post" class="form_reg" >
                <h1 class="head_signup">Sign-up</h1>
                <input type="text" name="uid" placeholder="Username"/>
                <input type="email" name="mail" placeholder="Email"/>
                <input type="password" name="pwd" placeholder="Password"/>
                <input type="password" name="pwd-repeat" placeholder="Repeat-Password"/>
                <button type = "submit" name="signup-submit123">Sign-up
                <i class="fa fa-sign-in"></i>
                </button>
                <button onclick="location.href='./login.php'" type="button">Login
                <i class="fa fa-sign-in"></i>
                </button>
            </form>
        
    </div>
   
</body>
</html>


        <?php
        if (isset($_POST["signup-submit123"])) {
            require ("./config.php");
            $username = $_POST["uid"];
            $email = $_POST["mail"];
            $password = $_POST["pwd"];
            $passwordRepeat = $_POST["pwd-repeat"];


            if (empty($username)||empty($email)||empty($password)||empty($passwordRepeat)) {

                echo ('<script>alert("You cant leave empty fields")</script>');
                exit();

            }
            elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                
                echo ('<script>alert("Enter a valid email")</script>');
                exit();
            }

            elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
                
                echo ('<script>alert("You can only use letters and numbers for username")</script>');
                exit();
            }
            elseif ($password !== $passwordRepeat) {
                
                echo ('<script>alert("Password dont match")</script>');
            
                exit();
            }
            else{
                $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt,$sql))
                {
                    echo ("Error");

                    exit();
                }        
            
            else{
                mysqli_stmt_bind_param($stmt,"s",$username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultsCheck = mysqli_stmt_num_rows($stmt);
                if ($resultsCheck >0)
                {
                    
                    echo ('<script>alert("Username Already Taken")</script>');
                    exit();
                }
                else
                {
                    
                    $apikeywords=mt_rand(1000000,15000000);
                    $sql = "INSERT INTO users(uidUsers,emailUsers,pwdUsers,api_key) VALUES(?,?,?,$apikeywords)";
                    $stmt = mysqli_stmt_init($connection);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        
                        echo ('<script>alert("sql input error")</script>');
                        exit();
                    }
                
                    else
                    {
                        $hashedPwd =password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
                        mysqli_stmt_execute($stmt);
                        
                        header("Location:login.php");

                        
                        exit();

                    }
                }
            }
        } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        }
        ?>


