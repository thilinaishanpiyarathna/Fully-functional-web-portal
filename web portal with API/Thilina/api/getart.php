
<?php require_once ('./navbar_nr.php');
require_once ('../config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    
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
        display:grid;
        grid-template-columns: 1fr 1fr;
        place-items:center; 
        height:450px;
        border:1px white solid;
        background-color:#1E1E1E;
    }
    .samplecode,.sampleresponse
    {
        border:1px white solid;
        height:100%;
        width:100%;
        
    }
    .thesampleimgae
    {
        width:100%;
        height:70%;
    }
    </style>
</head>
<body>
    <div class="url">
    <h3>Use this url with modifications to delete your articles from the website</h3>
    <h3 id="thekey">http://localhost/Website_API/api/showonearticleapi.php?aid=<b style="color:green;">[Article id]</b>&ak=<b style="color:green;">[Your API KEY]</b></h3>
    </div>
    <div class="yourarticles">
        <div class="samplearticles">
        <h2 style="color:yellow;"> Articles IDs</h2>
        <?php $you = $_SESSION["userId"];
        $sql = "SELECT ID from entry";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
        
            while($row = $result->fetch_assoc()) {

                echo '<h3> Article ID '.$row["ID"].'</h3>';
                
            }
        } else {

        echo "0 results";
    }?>
        </div>
        <div class="sampleresponse">
        <h2>Sample Response</h2>
        <img src="../pics/sample.png" alt="" class="thesampleimgae">
        </div>
   </div>
   <?php
    require_once ("../footer.php")
    ?>
</body>
</html>

