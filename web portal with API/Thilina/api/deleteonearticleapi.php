<?php
header("Content-type:application/JSON");


require("../config.php");

$sqlkey = "SELECT idUsers FROM users WHERE api_key =".$_GET["ak"];
$apikey = mysqli_fetch_array($connection->query($sqlkey));
$deluser = $apikey['idUsers'];
$articleid=$_GET["aid"];
$sql2 = "DELETE FROM entry WHERE ID=$articleid AND users=$deluser";
$result1 = mysqli_query($connection,$sql2);
if(mysqli_affected_rows($connection)) {
    echo json_encode(
        array('message' => 'Delete success')
      );
 } else {
    echo json_encode(
        array('message' => 'Invalid API key or article ID')
      );
 }
$connection->close();

?>

