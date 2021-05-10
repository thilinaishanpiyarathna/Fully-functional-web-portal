<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://storage.googleapis.com/apiit-static/logo-1.jpg" type="image/x-icon">

    <title>Document</title>
    
</head>
<body>
<header>
    <img src="https://storage.googleapis.com/apiit-static/logo-1.jpg" alt="logo" class="logo" >
    <nav>
        <ul class="nav_links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li><a href="../editor.php">Editor</a></li>
            <li><a href="../about.php">About</a></li>
            <li><a href="../article.php">Article</a></li>
            <li><a href="../api.php">API</a></li>
        </ul>
    </nav>
    <div class="nav_logout">
        <?php
        if (isset($_SESSION['userId'])) {
            
            echo ('<form action="../logout.php" method="post">
            <button type="submit" name"logout-submit" style="width: 120px; height: 43px;background-color: #00B710;">
            Logout <i class="fa fa-sign-out"></i></button>
            </form>');
        }
        else
        {
            echo ('<form action="../login.php" method="post">
            <button type="submit" name"logout-submit" style="width: 120px; height: 43px;background-color: #00B710;">
            Login <i class="fa fa-sign-in"></i></button>
            </form>');
        }
        ?>
    </div>

    
</header>
    
</body>
</html>