<?php require ('./navbar_nr.php')?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://storage.googleapis.com/apiit-static/logo-1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?php require_once("./links.php"); ?> 
    
    <?php require_once("./scripts.php"); ?> 





    
    <title>Home</title>
</head>
<body>
    <main>
        <section class="default">
            <?php if (isset($_SESSION['userUid'])) {
               require ("search.php");                                             
            } 
            ?>            
        </section>
        
    </main>
    <?php require_once ("./caro.php")?>
    <?php require_once ("./url.php")?>
    <?php require_once ("./footer.php")?>
</body>
</html>