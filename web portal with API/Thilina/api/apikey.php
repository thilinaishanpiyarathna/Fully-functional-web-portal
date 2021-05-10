<style>
    .putinthemiddle
    {
        display:grid;
        place-items:center;
        height:50%
    }
    body
    {
        background-color:#CDD1E1;
    }
    .gobak{
        margin:0;
        background-color:#4064AC;
        color:white;
        height: 50px ;
        width: 150px ;
        
        
    }
    a
    {
        text-decoration:none;
        color:white;
        font-size:24px;
    }
</style>
<?php

require_once ("../config.php");

session_start();
$userapi = $_SESSION["userId"];

$sqlkey = "SELECT api_key FROM users WHERE idUsers =$userapi";
$apikey = mysqli_fetch_array($connection->query($sqlkey));
?>

<div class="putinthemiddle">
<h2> Your API KEY IS</h2>
<h1 id="copy">
<?php echo ($apikey['api_key']); ?>
</h1>
<button class="gobak"><a href="../api.php"> GO BACK</a></button>
</div>