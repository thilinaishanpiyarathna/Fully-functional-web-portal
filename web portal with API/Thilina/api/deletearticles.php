<?php require_once ('./navbar_nr.php');
require_once ('../config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src=".api.js"></script>
    <title>Document</title>
    <style>
    body
    {
        background-color:#08151A;
        color:white; 
        border-bottom:1px white solid;
    }
    .url
    {
        border-top:1px white solid;
        display:grid;
        place-items:center;
        margin-top:20px;
        
    }
    .yourarticles
    {

    }
    .yourarticles
    {
        display:grid;
        place-items:center; 
        height:450px;
        border:1px white solid;
    }
    </style>
</head>
<body>
    <div class="url">
    <h3>Use this url with modifications to delete your articles from the website</h3>
    <h3 id="thekey">http://localhost/Website_API/api/deleteonearticleapi.php?aid=<b style="color:green;">[Article id]</b>&ak=<b style="color:green;">[Your API KEY]</b></h3>
    </div>
    <div class="yourarticles">
        <h2 class="center"> The Articles you can delete </h2>
        <?php $you = $_SESSION["userId"];
        $sql = "SELECT ID from entry WHERE users=$you";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
        
            while($row = $result->fetch_assoc()) {

                echo '<h3> Article ID '.$row["ID"].'</h3>';
                
            }
        } else {

        echo "You have no articles in the site";
    }?>
   </div>
   <?php
    require_once ("../footer.php")
    ?>
</body>
</html>
